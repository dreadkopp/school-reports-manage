<?php

namespace App\Filament\Reports\Resources;

use App\Filament\Reports\Resources\SchoolSubjectResource\Pages;
use App\Filament\Reports\Resources\SchoolSubjectResource\RelationManagers;
use App\Models\SchoolSubject;
use App\Models\SubjectGroup;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SchoolSubjectResource extends Resource
{
    protected static ?string $model = SchoolSubject::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required(),
                Forms\Components\Select::make('subject_group_id')
                ->options(SubjectGroup::query()->pluck('name','id'))
                    ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
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
            'index' => Pages\ListSchoolSubjects::route('/'),
            'create' => Pages\CreateSchoolSubject::route('/create'),
            'edit' => Pages\EditSchoolSubject::route('/{record}/edit'),
        ];
    }
}
