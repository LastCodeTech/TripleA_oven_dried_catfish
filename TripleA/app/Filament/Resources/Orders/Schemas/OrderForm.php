<?php

namespace App\Filament\Resources\Orders\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class OrderForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('order_number')
                    ->required(),
                TextInput::make('user_id')
                    ->numeric()
                    ->default(null),
                TextInput::make('city_id')
                    ->numeric()
                    ->default(null),
                TextInput::make('customer_email')
                    ->email()
                    ->required(),
                TextInput::make('address')
                    ->required(),
                TextInput::make('tel')
                    ->tel()
                    ->required(),
                TextInput::make('amount')
                    ->required()
                    ->numeric(),
                Textarea::make('items')
                    ->required()
                    ->columnSpanFull(),
                Select::make('status')
                    ->options([
            'pending' => 'Pending',
            'paid' => 'Paid',
            'failed' => 'Failed',
            'shipped' => 'Shipped',
            'delivered' => 'Delivered',
        ])
                    ->default('pending')
                    ->required(),
                TextInput::make('payment_reference')
                    ->default(null),
                Textarea::make('payment_data')
                    ->default(null)
                    ->columnSpanFull(),
                DateTimePicker::make('paid_at'),
            ]);
    }
}
