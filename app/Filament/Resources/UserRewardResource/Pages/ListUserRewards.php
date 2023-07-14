<?php

namespace App\Filament\Resources\UserRewardResource\Pages;

use App\Filament\Resources\UserRewardResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUserRewards extends ListRecords
{
    protected static string $resource = UserRewardResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
