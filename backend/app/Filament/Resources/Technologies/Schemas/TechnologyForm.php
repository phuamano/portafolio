<?php

namespace App\Filament\Resources\Technologies\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class TechnologyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nombre')
                    ->required()
                    ->maxLength(255),

                TextInput::make('slug')
                    ->label('Slug')
                    ->required()
                    ->maxLength(255),

                Select::make('type')
                    ->label('Tipo')
                    ->options([
                        'Frontend' => 'Frontend',
                        'Backend' => 'Backend',
                        'Database' => 'Database',
                        'Infrastructure' => 'Infrastructure',
                        'Tools' => 'Tools',
                    ])
                    ->required(),

                TextInput::make('icon')
                    ->label('Icono')
                    ->maxLength(255),

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