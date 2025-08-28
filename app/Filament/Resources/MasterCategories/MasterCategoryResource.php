<?php

namespace App\Filament\Resources\MasterCategories;

use App\Filament\Resources\MasterCategories\Pages\CreateMasterCategory;
use App\Filament\Resources\MasterCategories\Pages\EditMasterCategory;
use App\Filament\Resources\MasterCategories\Pages\ListMasterCategories;
use App\Filament\Resources\MasterCategories\Schemas\MasterCategoryForm;
use App\Filament\Resources\MasterCategories\Tables\MasterCategoriesTable;
use App\Models\MasterCategory;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class MasterCategoryResource extends Resource
{
    protected static ?string $model = MasterCategory::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::BookmarkSquare;

    protected static ?string $recordTitleAttribute = 'Master Category';

    protected static ?string $navigationLabel = "Master Category";

    protected static ?int $navigationSort = 1;

    public static function form(Schema $schema): Schema
    {
        return MasterCategoryForm::configure($schema)->columns(1);
    }

    public static function table(Table $table): Table
    {
        return MasterCategoriesTable::configure($table);
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
            'index' => ListMasterCategories::route('/'),
            // 'create' => CreateMasterCategory::route('/create'),
            // 'edit' => EditMasterCategory::route('/{record}/edit'),
        ];
    }
}
