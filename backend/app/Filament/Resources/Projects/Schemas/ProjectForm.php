<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('image')
                    ->image(),
                TextInput::make('url')
                    ->url(),
                TextInput::make('github_url')
                    ->url(),
                Toggle::make('featured')
                    ->required(),
                TextInput::make('number'),
                TextInput::make('category'),
                TextInput::make('technologies'),
            ]);
    }
}
