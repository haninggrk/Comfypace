<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SortingQuestionResource\Pages;
use App\Filament\Resources\SortingQuestionResource\RelationManagers;
use App\Models\SortingQuestion;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SortingQuestionResource extends Resource
{
    protected static ?string $model = SortingQuestion::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('exercise_question_id')
                    ->relationship('exerciseQuestion', 'id')
                    ->required(),
                Forms\Components\TextInput::make('text')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('img')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('score')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('exerciseQuestion.id'),
                Tables\Columns\TextColumn::make('text'),
                Tables\Columns\TextColumn::make('img'),
                Tables\Columns\TextColumn::make('score'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSortingQuestions::route('/'),
            'create' => Pages\CreateSortingQuestion::route('/create'),
            'edit' => Pages\EditSortingQuestion::route('/{record}/edit'),
        ];
    }    
}
