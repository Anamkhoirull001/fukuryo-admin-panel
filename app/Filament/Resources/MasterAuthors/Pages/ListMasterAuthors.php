<?php

namespace App\Filament\Resources\MasterAuthors\Pages;

use App\Filament\Resources\MasterAuthors\MasterAuthorResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMasterAuthors extends ListRecords
{
    protected static string $resource = MasterAuthorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->color('info')
                ->label('Create New'),
        ];
    }
}
