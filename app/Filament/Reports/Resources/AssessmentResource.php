<?php

namespace App\Filament\Reports\Resources;

use App\Filament\Reports\Resources\AssessmentResource\Pages;
use App\Filament\Reports\Resources\AssessmentResource\RelationManagers;
use App\Models\Assessment;
use App\Models\Pupil;
use App\Models\SchoolSubject;
use App\Models\Semester;
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
        return $form
            ->schema([
                Forms\Components\Select::make('pupil_id')
                ->options(Pupil::query()->pluck('name','id')->toArray()),

                Forms\Components\Select::make('school_subject_id')
                    ->options(SchoolSubject::query()->pluck('name','id')->toArray()),

                Forms\Components\Select::make('semester_id')
                    ->options(Semester::query()->pluck('start_date','id')->toArray()),

                Forms\Components\Textarea::make('descriptive'),
                Forms\Components\Textarea::make('notes'),
                Forms\Components\Textarea::make('internal_notes'),

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