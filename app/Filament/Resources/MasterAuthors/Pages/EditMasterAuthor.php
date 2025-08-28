<?php

namespace App\Filament\Resources\MasterAuthors\Pages;

use App\Filament\Resources\MasterAuthors\MasterAuthorResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditMasterAuthor extends EditRecord
{
    protected static string $resource = MasterAuthorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
