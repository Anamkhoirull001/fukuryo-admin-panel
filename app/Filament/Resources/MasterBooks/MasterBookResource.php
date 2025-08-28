<?php

namespace App\Filament\Resources\MasterBooks;

use App\Filament\Resources\MasterBooks\Pages\CreateMasterBook;
use App\Filament\Resources\MasterBooks\Pages\EditMasterBook;
use App\Filament\Resources\MasterBooks\Pages\ListMasterBooks;
use App\Filament\Resources\MasterBooks\Schemas\MasterBookForm;
use App\Filament\Resources\MasterBooks\Tables\MasterBooksTable;
use App\Models\MasterBook;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class MasterBookResource extends Resource
{
    protected static ?string $model = MasterBook::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::BookOpen;

    protected static ?string $recordTitleAttribute = 'Master Book';

    protected static ?string $navigationLabel = "Master Book";

    protected static ?int $navigationSort = 3;

    public static function form(Schema $schema): Schema
    {
        return MasterBookForm::configure($schema)->columns(1);
    }

    public static function table(Table $table): Table
    {
        return MasterBooksTable::configure($table);
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
            'index' => ListMasterBooks::route('/'),
            // 'create' => CreateMasterBook::route('/create'),
            // 'edit' => EditMasterBook::route('/{record}/edit'),
        ];
    }
}
