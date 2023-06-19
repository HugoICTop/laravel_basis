<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GreetingResource\Pages;
use App\Filament\Resources\GreetingResource\RelationManagers;
use App\Models\Greeting;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GreetingResource extends Resource
{
    protected static ?string $model = Greeting::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('datum1')->required(),
                Forms\Components\TextInput::make('body')->required(),
                Forms\Components\TextInput::make('demonstration'),
                //Forms\Components\BelongsToSelect::('id')
                //->relationship('demonstrations','datum'), 
                Forms\Components\TextInput::make('naam')->required(),
                Forms\Components\TextInput::make('email')->email()->required(),
                Forms\Components\TextInput::make('telefoon')->rule('numeric'),
                //Forms\Components\FileUpload::make('foto_storing'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('datum1')->sortable(),
                Tables\Columns\TextColumn::make('body'),
                //Tables\Columns\TextColumn::make('demonstration'),
                Tables\Columns\TextColumn::make('demonstration.body'),
                Tables\Columns\TextColumn::make('created_at'),
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
            'index' => Pages\ListGreetings::route('/'),
            'create' => Pages\CreateGreeting::route('/create'),
            'edit' => Pages\EditGreeting::route('/{record}/edit'),
        ];
    }    
}
