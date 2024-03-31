<?php

namespace App\Filament\Reports\Resources;

use App\Filament\Reports\Resources\SubjectGroupResource\Pages\CreateSubjectGroup;
use App\Filament\Reports\Resources\SubjectGroupResource\Pages\EditSubjectGroup;
use App\Filament\Reports\Resources\SubjectGroupResource\Pages\ListSubjectGroups;
use App\Models\SubjectGroup;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SubjectGroupResource extends Resource
{
    protected static ?string $model = SubjectGroup::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
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
            'index'  => ListSubjectGroups::route('/'),
            'create' => CreateSubjectGroup::route('/create'),
            'edit'   => EditSubjectGroup::route('/{record}/edit'),
        ];
    }
}
