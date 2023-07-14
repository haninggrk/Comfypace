<?php

namespace App\Filament\Resources\UserClassroomScheduleSessionReplacementResource\Pages;

use App\Filament\Resources\UserClassroomScheduleSessionReplacementResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUserClassroomScheduleSessionReplacement extends EditRecord
{
    protected static string $resource = UserClassroomScheduleSessionReplacementResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
