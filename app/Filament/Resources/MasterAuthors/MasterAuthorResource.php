<?php

namespace App\Filament\Resources\MasterAuthors;

use App\Filament\Resources\MasterAuthors\Pages\CreateMasterAuthor;
use App\Filament\Resources\MasterAuthors\Pages\EditMasterAuthor;
use App\Filament\Resources\MasterAuthors\Pages\ListMasterAuthors;
use App\Filament\Resources\MasterAuthors\Schemas\MasterAuthorForm;
use App\Filament\Resources\MasterAuthors\Tables\MasterAuthorsTable;
use App\Models\MasterAuthor;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class MasterAuthorResource extends Resource
{
    protected static ?string $model = MasterAuthor::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::UserGroup;

    protected static ?string $recordTitleAttribute = 'Master Author';

    protected static ?string $navigationLabel = "Master Author";


    protected static ?int $navigationSort = 2;

    public static function form(Schema $schema): Schema
    {
        return MasterAuthorForm::configure($schema)->columns(1);
    }

    public static function table(Table $table): Table
    {
        return MasterAuthorsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListMasterAuthors::route('/'),
            // 'create' => CreateMasterAuthor::route('/create'),
            // 'edit' => EditMasterAuthor::route('/{record}/edit'),
        ];
    }
}
