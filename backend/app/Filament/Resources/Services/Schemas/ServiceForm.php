<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('number')
                    ->label('Número')
                    ->required()
                    ->maxLength(10),

                TextInput::make('title')
                    ->label('Título')
                    ->required()
                    ->maxLength(255),

                Textarea::make('description')
                    ->label('Descripción')
                    ->required()
                    ->rows(5)
                    ->columnSpanFull(),

                TextInput::make('sort_order')
                    ->label('Orden')
                    ->required()
                    ->numeric()
                    ->integer()
                    ->minValue(0)
                    ->default(0),

                Toggle::make('is_active')
                    ->label('Activo')
                    ->default(true),
            ]);
    }
}