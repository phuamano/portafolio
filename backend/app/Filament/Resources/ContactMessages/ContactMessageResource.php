<?php

namespace App\Filament\Resources\ContactMessages;

use App\Filament\Resources\ContactMessages\Pages\ListContactMessages;
use App\Filament\Resources\ContactMessages\Tables\ContactMessagesTable;
use App\Models\ContactMessage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use App\Filament\Resources\ContactMessages\Pages\ViewContactMessage;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ContactMessageResource extends Resource
{
    protected static ?string $model = ContactMessage::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function table(Table $table): Table
    {
        return ContactMessagesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListContactMessages::route('/'),
            'view' => ViewContactMessage::route('/{record}'),
        ];
    }

    public static function infolist(Schema $schema): Schema
{
    return $schema
        ->components([
            Section::make('Información del contacto')
                ->schema([
                    TextEntry::make('name')
                        ->label('Nombre'),

                    TextEntry::make('email')
                        ->label('Email')
                        ->copyable(),
                ])
                ->columns(2),

            Section::make('Mensaje')
                ->schema([
                    TextEntry::make('message')
                        ->label('Contenido')
                        ->columnSpanFull(),
                ]),

            Section::make('Estado')
                ->schema([
                    TextEntry::make('is_read')
                        ->label('Leído')
                        ->badge()
                        ->formatStateUsing(
                            fn (bool $state): string => $state ? 'Sí' : 'No'
                        ),

                    TextEntry::make('created_at')
                        ->label('Recibido')
                        ->dateTime(),
                ])
                ->columns(2),
        ]);
}
}