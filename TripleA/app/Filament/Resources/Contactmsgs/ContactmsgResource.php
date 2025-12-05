<?php

namespace App\Filament\Resources\Contactmsgs;

use App\Filament\Resources\Contactmsgs\Pages\CreateContactmsg;
use App\Filament\Resources\Contactmsgs\Pages\EditContactmsg;
use App\Filament\Resources\Contactmsgs\Pages\ListContactmsgs;
use App\Filament\Resources\Contactmsgs\Pages\ViewContactmsg;
use App\Filament\Resources\Contactmsgs\Schemas\ContactmsgForm;
use App\Filament\Resources\Contactmsgs\Schemas\ContactmsgInfolist;
use App\Filament\Resources\Contactmsgs\Tables\ContactmsgsTable;
use App\Models\Contactmsg;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ContactmsgResource extends Resource
{
    protected static ?string $model = Contactmsg::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'contactmsg';

    public static function form(Schema $schema): Schema
    {
        return ContactmsgForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ContactmsgInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ContactmsgsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListContactmsgs::route('/'),
            'create' => CreateContactmsg::route('/create'),
            'view' => ViewContactmsg::route('/{record}'),
            'edit' => EditContactmsg::route('/{record}/edit'),
        ];
    }
}
