<?php

namespace App\Filament\Resources\MasterBooks\Pages;

use App\Filament\Resources\MasterBooks\MasterBookResource;
use Filament\Resources\Pages\CreateRecord;

class CreateMasterBook extends CreateRecord
{
    protected static string $resource = MasterBookResource::class;
}
