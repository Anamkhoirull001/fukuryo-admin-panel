<?php

namespace App\Filament\Resources\MasterCategories\Pages;

use App\Filament\Resources\MasterCategories\MasterCategoryResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditMasterCategory extends EditRecord
{
    protected static string $resource = MasterCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
