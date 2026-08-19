<?php

namespace App\Filament\Resources\Projects\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ProjectsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('number')
                    ->label('#')
                    ->sortable(),

                ImageColumn::make('image')
                    ->label('Imagen'),

                TextColumn::make('title')
                    ->label('Proyecto')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('category')
                    ->label('Categoría')
                    ->badge()
                    ->searchable(),

                IconColumn::make('featured')
                    ->label('Destacado')
                    ->boolean(),

                TextColumn::make('url')
                    ->label('Web')
                    ->url(fn ($record) => $record->url)
                    ->openUrlInNewTab()
                    ->toggleable(),

                TextColumn::make('github_url')
                    ->label('GitHub')
                    ->url(fn ($record) => $record->github_url)
                    ->openUrlInNewTab()
                    ->toggleable(),

                TextColumn::make('created_at')
                    ->label('Creado')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}