<?php

namespace App\Filament\Resources\GreetingResource\Pages;

use App\Filament\Resources\GreetingResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGreeting extends EditRecord
{
    protected static string $resource = GreetingResource::class;
    
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    
    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
