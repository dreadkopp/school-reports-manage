<?php

namespace App\Filament\Reports\Resources\UserResource\Pages;

use App\Filament\Reports\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Hash;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;

    public function beforeCreate():void
    {
        $password = $this->data['password'];
        unset($this->data['password']);
        unset($this->data['password_confirm']);

        $this->data['password'] = Hash::make($password);

    }
}
