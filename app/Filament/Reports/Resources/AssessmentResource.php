<?php

namespace App\Filament\Reports\Resources;

use App\Filament\Reports\Resources\AssessmentResource\Pages;
use App\Filament\Reports\Resources\AssessmentResource\RelationManagers;
use App\Models\Assessment;
use App\Models\Pupil;
use App\Models\SchoolSubject;
use App\Models\Semester;
use Carbon\Carbon;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AssessmentResource extends Resource
{
    protected static ?string $model = Assessment::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {

        $toolBarOptions = [
            'blockquote',
            'bold',
            'bulletList',
            'h2',
            'h3',
            'italic',
            'orderedList',
            'redo',
            'underline',
            'undo',
        ];

        return $form
            ->schema([
                Forms\Components\Select::make('pupil_id')
                ->options(Pupil::query()->pluck('name','id')->toArray())
                ->required(),

                Forms\Components\Select::make('school_subject_id')
                    ->options(SchoolSubject::query()->pluck('name','id')->toArray())
                ->required(),

                Forms\Components\Select::make('semester_id')
                    ->options(Semester::query()
                        ->where('end_date', '<=', Carbon::now())
                        ->lazy()
                        ->keyBy('id')
                        ->map(fn(Semester $semester) => $semester->start_date->format('m-Y'). ' - ' . $semester->end_date->format('m-Y'))
                        ->toArray())
                    ->required(),

                Forms\Components\RichEditor::make('descriptive')
                    ->columnSpanFull()
                    ->toolbarButtons($toolBarOptions),
                Forms\Components\RichEditor::make('notes')
                    ->columnSpanFull()
                    ->toolbarButtons($toolBarOptions),
                Forms\Components\RichEditor::make('internal_notes')
                    ->columnSpanFull()
                    ->toolbarButtons($toolBarOptions),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAssessments::route('/'),
            'create' => Pages\CreateAssessment::route('/create'),
            'edit' => Pages\EditAssessment::route('/{record}/edit'),
        ];
    }
}
