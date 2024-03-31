<?php

namespace App\Filament\Reports\Resources;

use App\Filament\Reports\Resources\PupilResource\Pages;
use App\Filament\Reports\Resources\PupilResource\RelationManagers;
use App\Models\Pupil;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PupilResource extends Resource
{
    protected static ?string $model = Pupil::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
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
            'index' => Pages\ListPupils::route('/'),
            'create' => Pages\CreatePupil::route('/create'),
            'edit' => Pages\EditPupil::route('/{record}/edit'),
        ];
    }
}
