<?php

namespace App\Filament\Reports\Resources\UserResource\Pages;

use App\Filament\Reports\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    public function beforeSave():void
    {
        $password = $this->data['password'];
        unset($this->data['password']);
        unset($this->data['password_confirm']);

        $this->data['password'] = Hash::make($password);

    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
