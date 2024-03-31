<?php

namespace App\Filament\Reports\Resources;

use App\Filament\Reports\Resources\SemesterResource\Pages\CreateSemester;
use App\Filament\Reports\Resources\SemesterResource\Pages\EditSemester;
use App\Filament\Reports\Resources\SemesterResource\Pages\ListSemesters;
use App\Models\Semester;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SemesterResource extends Resource
{
    protected static ?string $model = Semester::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                DatePicker::make('start_date')
                    ->required(),
                DatePicker::make('end_date')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('start_date')->date('m-Y'),
                TextColumn::make('end_date')->date('m-Y'),
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
            'index'  => ListSemesters::route('/'),
            'create' => CreateSemester::route('/create'),
            'edit'   => EditSemester::route('/{record}/edit'),
        ];
    }
}
