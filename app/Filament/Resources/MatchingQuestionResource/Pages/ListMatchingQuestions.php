<?php

namespace App\Filament\Resources\MatchingQuestionResource\Pages;

use App\Filament\Resources\MatchingQuestionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMatchingQuestions extends ListRecords
{
    protected static string $resource = MatchingQuestionResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
