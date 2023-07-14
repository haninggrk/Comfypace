<?php

namespace App\Filament\Resources\LevelResource\Pages;

use App\Filament\Resources\LevelResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageLevels extends ManageRecords
{
    protected static string $resource = LevelResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
