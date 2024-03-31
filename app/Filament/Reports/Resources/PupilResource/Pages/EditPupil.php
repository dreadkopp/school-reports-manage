<?php

namespace App\Filament\Reports\Resources\PupilResource\Pages;

use App\Filament\Reports\Resources\PupilResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPupil extends EditRecord
{
    protected static string $resource = PupilResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
