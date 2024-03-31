<?php

namespace App\Filament\Reports\Resources\SchoolSubjectResource\Pages;

use App\Filament\Reports\Resources\SchoolSubjectResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSchoolSubjects extends ListRecords
{
    protected static string $resource = SchoolSubjectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
