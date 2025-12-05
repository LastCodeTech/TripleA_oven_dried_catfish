<?php

namespace App\Filament\Resources\Contactmsgs\Pages;

use App\Filament\Resources\Contactmsgs\ContactmsgResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListContactmsgs extends ListRecords
{
    protected static string $resource = ContactmsgResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
