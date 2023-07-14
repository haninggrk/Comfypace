<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ClassroomLevelResource\Pages;
use App\Filament\Resources\ClassroomLevelResource\RelationManagers;
use App\Models\ClassroomLevel;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ClassroomLevelResource extends Resource
{
    protected static ?string $model = ClassroomLevel::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('classroom_id')
                    ->relationship('classroom', 'name')
                    ->required(),
                Forms\Components\Select::make('level_id')
                    ->relationship('level', 'name')
                    ->required(),
                Forms\Components\Toggle::make('is_active')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('classroom.name'),
                Tables\Columns\TextColumn::make('level.name'),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean(),
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
            'index' => Pages\ListClassroomLevels::route('/'),
            'create' => Pages\CreateClassroomLevel::route('/create'),
            'edit' => Pages\EditClassroomLevel::route('/{record}/edit'),
        ];
    }    
}
