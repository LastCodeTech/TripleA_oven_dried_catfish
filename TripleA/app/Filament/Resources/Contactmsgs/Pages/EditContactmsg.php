<?php

namespace App\Filament\Resources\Contactmsgs\Pages;

use App\Filament\Resources\Contactmsgs\ContactmsgResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditContactmsg extends EditRecord
{
    protected static string $resource = ContactmsgResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
