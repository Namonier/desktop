<?php

namespace App\Filament\Resources\Sobres\Pages;

use App\Filament\Resources\Sobres\SobreResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManageSobres extends ManageRecords
{
    protected static string $resource = SobreResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
