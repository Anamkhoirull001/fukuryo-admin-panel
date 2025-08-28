<?php

namespace App\Filament\Resources\MasterBooks\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Schema;

class MasterBookForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Grid::make(1),
                TextInput::make('name')->label('Name')->required(),
                TextInput::make('isbn')->label('ISBN')->required()->unique(ignoreRecord: true),
                Select::make('category_id')
                    ->label('Category')
                    ->relationship('category', 'name')
                    ->native(false)
                    ->preload()
                    ->searchable()
                    ->required(),
                Select::make('author_id')
                    ->label('Author')
                    ->relationship('author', 'name')
                    ->native(false)
                    ->preload()
                    ->searchable()
                    ->required(),
            ]);
    }
}
