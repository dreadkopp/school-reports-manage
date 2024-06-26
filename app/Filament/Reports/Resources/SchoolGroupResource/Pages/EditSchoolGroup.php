<?php

namespace App\Filament\Reports\Resources\SchoolGroupResource\Pages;

use App\Filament\Reports\Resources\SchoolGroupResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSchoolGroup extends EditRecord
{
    protected static string $resource = SchoolGroupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
