<?php

namespace App\Filament\Resources\MultipleChoiceAnswerResource\Pages;

use App\Filament\Resources\MultipleChoiceAnswerResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMultipleChoiceAnswer extends EditRecord
{
    protected static string $resource = MultipleChoiceAnswerResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
