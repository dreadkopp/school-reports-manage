<?php

namespace App\Filament\Reports\Resources;

use App\Filament\Reports\Resources\AssessmentResource\Pages\CreateAssessment;
use App\Filament\Reports\Resources\AssessmentResource\Pages\EditAssessment;
use App\Filament\Reports\Resources\AssessmentResource\Pages\ListAssessments;
use App\Models\Assessment;
use App\Models\Pupil;
use App\Models\SchoolSubject;
use App\Models\Semester;
use Carbon\Carbon;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

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
                Select::make('pupil_id')
                    ->options(Pupil::query()->pluck('name', 'id')->toArray())
                    ->required(),

                Select::make('school_subject_id')
                    ->options(SchoolSubject::query()->pluck('name', 'id')->toArray())
                    ->required(),

                Select::make('semester_id')
                    ->options(Semester::query()
                        ->where('end_date', '>=', Carbon::now())
                        ->lazy()
                        ->keyBy('id')
                        ->map(fn (Semester $semester) => $semester->start_date->format('m-Y').' - '.$semester->end_date->format('m-Y'))
                        ->toArray())
                    ->required(),

                Select::make('status')
                    ->options(['in-progress', 'draft', 'final'])
                    ->required(),

                MarkdownEditor::make('descriptive')
                    ->columnSpanFull()
                    ->toolbarButtons($toolBarOptions),
                MarkdownEditor::make('notes')
                    ->columnSpanFull()
                    ->toolbarButtons($toolBarOptions),
                MarkdownEditor::make('internal_notes')
                    ->columnSpanFull()
                    ->toolbarButtons($toolBarOptions),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id'),
                IconColumn::make('status')
                    ->icon(fn (string $state): string => match ($state) {
                        'new'         => 'heroicon-o-pencil',
                        'draft'       => 'heroicon-o-pencil',
                        'in-progress' => 'heroicon-o-clock',
                        'final'       => 'heroicon-o-check-circle',
                    }),
            ])
            ->filters([
            ])
            ->actions([
                EditAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
        ];
    }

    public static function getPages(): array
    {
        return [
            'index'  => ListAssessments::route('/'),
            'create' => CreateAssessment::route('/create'),
            'edit'   => EditAssessment::route('/{record}/edit'),
        ];
    }
}
