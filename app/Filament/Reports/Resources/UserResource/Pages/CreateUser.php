<?php

namespace App\Filament\Reports\Resources\UserResource\Pages;

use App\Filament\Reports\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;
}
