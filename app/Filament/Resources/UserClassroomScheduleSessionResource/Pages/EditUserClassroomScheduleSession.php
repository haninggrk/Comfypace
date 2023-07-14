<?php

namespace App\Filament\Resources\UserClassroomScheduleSessionResource\Pages;

use App\Filament\Resources\UserClassroomScheduleSessionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUserClassroomScheduleSession extends EditRecord
{
    protected static string $resource = UserClassroomScheduleSessionResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
