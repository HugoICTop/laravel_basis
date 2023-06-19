<?php

namespace App\Filament\Resources\DemonstrationResource\Pages;

use App\Filament\Resources\DemonstrationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDemonstration extends EditRecord
{
    protected static string $resource = DemonstrationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
