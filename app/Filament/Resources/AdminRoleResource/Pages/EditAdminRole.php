<?php

namespace App\Filament\Resources\AdminRoleResource\Pages;

use App\Filament\Resources\AdminRoleResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAdminRole extends EditRecord
{
    protected static string $resource = AdminRoleResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
