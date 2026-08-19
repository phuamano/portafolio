<?php

namespace App\Filament\Resources\ContactMessages\Pages;

use App\Filament\Resources\ContactMessages\ContactMessageResource;
use Filament\Resources\Pages\ViewRecord;
use App\Models\ContactMessage;

class ViewContactMessage extends ViewRecord
{
    protected static string $resource = ContactMessageResource::class;

    protected function afterFill(): void
    {
        /** @var ContactMessage $record */
        $record = $this->record;

        if (! $record->is_read) {
            $record->update([
                'is_read' => true,
            ]);
        }
    }

    protected function getHeaderActions(): array
    {
        return [];
    }
}