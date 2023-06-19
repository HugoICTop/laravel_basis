<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DemonstrationResource\Pages;
use App\Filament\Resources\DemonstrationResource\RelationManagers;
use App\Models\Demonstration;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DemonstrationResource extends Resource
{
    protected static ?string $model = Demonstration::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('datum'),
                Tables\Columns\TextColumn::make('afspraak'),
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
            'index' => Pages\ListDemonstrations::route('/'),
            'create' => Pages\CreateDemonstration::route('/create'),
            'edit' => Pages\EditDemonstration::route('/{record}/edit'),
        ];
    }    
}
