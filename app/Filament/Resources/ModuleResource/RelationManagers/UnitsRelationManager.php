<?php

namespace App\Filament\Resources\ModuleResource\RelationManagers;

use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UnitsRelationManager extends RelationManager
{
    protected static string $relationship = 'units';

    protected static ?string $recordTitleAttribute = 'module_id';

    public static function form(Form $form): Form
    {
        return $form->columns(2)
        ->schema([
            Forms\Components\Select::make('module_id')
                ->relationship('module', 'name')
                ->required(),
            Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255),
            Forms\Components\RichEditor::make('description')
                ->required()
                ->maxLength(255)->columnSpan(2),
  
            Forms\Components\TextInput::make('point')
                ->required(),
            Forms\Components\TextInput::make('img_url')->label("Youtube Link")
                ->required()
                ->maxLength(255),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('img_url')->label("Youtube")->formatUsing(fn () => 'Open in Youtube')
            ->url(fn ($record) => $record->github_url, true),
            Tables\Columns\TextColumn::make('name'),
            Tables\Columns\TextColumn::make('description')->wrap()->html(),
            Tables\Columns\TextColumn::make('point'),
        ])
        ->filters([
            //
        ])
        ->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
        ])
        ->headerActions([
            Tables\Actions\CreateAction::make()
        ])
 
        ->bulkActions([
            Tables\Actions\DeleteBulkAction::make(),
        ])
        ->reorderable("order_number")
        ->defaultSort("order_number");
    }    
}
