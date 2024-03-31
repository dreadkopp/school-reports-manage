<?php

namespace App\Filament\Reports\Resources;

use App\Filament\Reports\Resources\PupilResource\Pages\CreatePupil;
use App\Filament\Reports\Resources\PupilResource\Pages\EditPupil;
use App\Filament\Reports\Resources\PupilResource\Pages\ListPupils;
use App\Models\Pupil;
use App\Models\SchoolGroup;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PupilResource extends Resource
{
    protected static ?string $model = Pupil::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required(),
                Select::make('school_group_id')
                    ->options(SchoolGroup::query()->pluck('name', 'id')->toArray())
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                IconColumn::make('status'), // TODO: check all assessments for 'final' state
            ])
            ->filters([
            ])
            ->actions([
                EditAction::make(),
                Action::make('exportReport'),
                Action::make('previewReport'),
                // TODO: get all assessments of current semester for pupil. check if all are in state final, generate final PDF
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
            'index'  => ListPupils::route('/'),
            'create' => CreatePupil::route('/create'),
            'edit'   => EditPupil::route('/{record}/edit'),
        ];
    }
}
