<?php

namespace App\Filament\Resources\MasterBooks\Pages;

use App\Filament\Resources\MasterBooks\MasterBookResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditMasterBook extends EditRecord
{
    protected static string $resource = MasterBookResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
