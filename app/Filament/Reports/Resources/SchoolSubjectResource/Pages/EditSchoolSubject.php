<?php

namespace App\Filament\Reports\Resources\SchoolSubjectResource\Pages;

use App\Filament\Reports\Resources\SchoolSubjectResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSchoolSubject extends EditRecord
{
    protected static string $resource = SchoolSubjectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
