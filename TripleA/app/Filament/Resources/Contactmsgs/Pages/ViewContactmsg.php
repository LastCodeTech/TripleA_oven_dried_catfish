<?php

namespace App\Filament\Resources\Contactmsgs\Pages;

use App\Filament\Resources\Contactmsgs\ContactmsgResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewContactmsg extends ViewRecord
{
    protected static string $resource = ContactmsgResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
