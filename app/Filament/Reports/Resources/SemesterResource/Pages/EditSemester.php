<?php

namespace App\Filament\Reports\Resources\SemesterResource\Pages;

use App\Filament\Reports\Resources\SemesterResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSemester extends EditRecord
{
    protected static string $resource = SemesterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
