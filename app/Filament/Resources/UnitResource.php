<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ModuleResource\RelationManagers\UnitsRelationManager;
use App\Filament\Resources\UnitResource\Pages;
use App\Filament\Resources\UnitResource\RelationManagers;
use App\Models\Unit;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UnitResource extends Resource
{
    protected static ?string $model = Unit::class;
    protected static ?string $navigationGroup = 'Level, Classroom & Material';

    protected static ?string $navigationIcon = 'heroicon-o-collection';

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
                Tables\Columns\TextColumn::make('module.name'),
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('description')->wrap()->html(),              
                Tables\Columns\TextColumn::make('point'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\Action::make("Open in Youtube")
                ->url(fn ($record) => $record->img_url, true),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),

            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUnits::route('/'),
            'create' => Pages\CreateUnit::route('/create'),
            'edit' => Pages\EditUnit::route('/{record}/edit'),
        ];
    }    
}
