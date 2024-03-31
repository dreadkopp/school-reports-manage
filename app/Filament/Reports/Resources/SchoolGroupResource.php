<?php

namespace App\Filament\Reports\Resources;

use App\Filament\Reports\Resources\SchoolGroupResource\Pages\CreateSchoolGroup;
use App\Filament\Reports\Resources\SchoolGroupResource\Pages\EditSchoolGroup;
use App\Filament\Reports\Resources\SchoolGroupResource\Pages\ListSchoolGroups;
use App\Models\SchoolGroup;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SchoolGroupResource extends Resource
{
    protected static ?string $model = SchoolGroup::class;

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
            'index'  => ListSchoolGroups::route('/'),
            'create' => CreateSchoolGroup::route('/create'),
            'edit'   => EditSchoolGroup::route('/{record}/edit'),
        ];
    }
}
