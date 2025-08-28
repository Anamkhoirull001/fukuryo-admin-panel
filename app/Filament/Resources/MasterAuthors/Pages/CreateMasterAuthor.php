<?php

namespace App\Filament\Resources\MasterAuthors\Pages;

use App\Filament\Resources\MasterAuthors\MasterAuthorResource;
use Filament\Resources\Pages\CreateRecord;

class CreateMasterAuthor extends CreateRecord
{
    protected static string $resource = MasterAuthorResource::class;
}
