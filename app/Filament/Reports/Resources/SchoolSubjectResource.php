<?php

namespace App\Filament\Reports\Resources;

use App\Filament\Reports\Resources\SchoolSubjectResource\Pages\CreateSchoolSubject;
use App\Filament\Reports\Resources\SchoolSubjectResource\Pages\EditSchoolSubject;
use App\Filament\Reports\Resources\SchoolSubjectResource\Pages\ListSchoolSubjects;
use App\Models\SchoolSubject;
use App\Models\SubjectGroup;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SchoolSubjectResource extends Resource
{
    protected static ?string $model = SchoolSubject::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required(),
                Select::make('subject_group_id')
                    ->options(SubjectGroup::query()->pluck('name', 'id'))
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
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
            'index'  => ListSchoolSubjects::route('/'),
            'create' => CreateSchoolSubject::route('/create'),
            'edit'   => EditSchoolSubject::route('/{record}/edit'),
        ];
    }
}
