<?php

namespace App\Filament\Resources\Projects\Schemas;

use App\Models\Technology;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        $options = Technology::query()
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->pluck('name', 'name')
            ->toArray();

        /** @var array<string, string> $options */

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

                Select::make('category')
                    ->label('Categoría')
                    ->options([
                        'E-commerce' => 'E-commerce',
                        'Web Application' => 'Web Application',
                        'Software' => 'Software',
                    ])
                    ->required(),

                Textarea::make('description')
                    ->label('Descripción')
                    ->required()
                    ->rows(5)
                    ->columnSpanFull(),

                FileUpload::make('image')
                    ->label('Imagen')
                    ->image()
                    ->directory('projects')
                    ->imagePreviewHeight('250')
                    ->columnSpanFull(),

                Select::make('technologies')
                    ->label('Tecnologías')
                    ->multiple()
                    ->options($options)
                    ->searchable()
                    ->preload()
                    ->required()
                    ->columnSpanFull(),

                TextInput::make('url')
                    ->label('URL del proyecto')
                    ->url()
                    ->maxLength(255),

                TextInput::make('github_url')
                    ->label('GitHub')
                    ->url()
                    ->maxLength(255),

                Toggle::make('featured')
                    ->label('Proyecto destacado')
                    ->default(false),
            ]);
    }
}