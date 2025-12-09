<?php

namespace App\Filament\Resources\Orders\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class OrderInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('order_number'),
                TextEntry::make('user_id')
                    ->numeric(),
                TextEntry::make('city_id')
                    ->numeric(),
                TextEntry::make('customer_email'),
                TextEntry::make('address'),
                TextEntry::make('tel'),
                TextEntry::make('amount')
                    ->numeric(),
                TextEntry::make('status'),
                TextEntry::make('payment_reference'),
                TextEntry::make('paid_at')
                    ->dateTime(),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
