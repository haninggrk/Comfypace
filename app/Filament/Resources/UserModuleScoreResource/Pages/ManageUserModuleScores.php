<?php

namespace App\Filament\Resources\UserModuleScoreResource\Pages;

use App\Filament\Resources\UserModuleScoreResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageUserModuleScores extends ManageRecords
{
    protected static string $resource = UserModuleScoreResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
