<?php

namespace App\Filament\Resources\MasterBooks\Pages;

use App\Filament\Resources\MasterBooks\MasterBookResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMasterBooks extends ListRecords
{
    protected static string $resource = MasterBookResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->color('info')
                ->label('Create New')
        ];
    }
}
