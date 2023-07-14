<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ClassroomScheduleSessionResource\Pages;
use App\Filament\Resources\ClassroomScheduleSessionResource\RelationManagers;
use App\Models\ClassroomScheduleSession;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ClassroomScheduleSessionResource extends Resource
{
    protected static ?string $model = ClassroomScheduleSession::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('classroom_teacher_id')
                    ->relationship('classroomTeacher', 'id')
                    ->required(),
                Forms\Components\Select::make('classroom_schedule_id')
                    ->relationship('classroomSchedule', 'id')
                    ->required(),
                Forms\Components\TextInput::make('start_time')
                    ->required(),
                Forms\Components\TextInput::make('end_time')
                    ->required(),
                Forms\Components\TextInput::make('venue')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('classroomTeacher.id'),
                Tables\Columns\TextColumn::make('classroomSchedule.id'),
                Tables\Columns\TextColumn::make('start_time'),
                Tables\Columns\TextColumn::make('end_time'),
                Tables\Columns\TextColumn::make('venue'),
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
            'index' => Pages\ListClassroomScheduleSessions::route('/'),
            'create' => Pages\CreateClassroomScheduleSession::route('/create'),
            'edit' => Pages\EditClassroomScheduleSession::route('/{record}/edit'),
        ];
    }    
}
