<?php

namespace App\Filament\Resources\MatchingItemResource\Pages;

use App\Filament\Resources\MatchingItemResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMatchingItem extends EditRecord
{
    protected static string $resource = MatchingItemResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
