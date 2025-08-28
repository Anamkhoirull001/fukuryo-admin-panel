<?php

namespace App\Filament\Resources\MasterBooks\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;

class MasterBooksTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('no')->label('#')->rowIndex()->sortable(false),
                TextColumn::make('name')->label('Book Name')->searchable(),
                TextColumn::make('isbn')->label('ISBN')->searchable(),
                TextColumn::make('category.name')->label('Category'),
                TextColumn::make('author.name')->label('Author'),
                ToggleColumn::make('status')->label('Status'),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
