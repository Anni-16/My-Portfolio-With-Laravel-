<?php

namespace App\Filament\Resources\AuthorNames;

use App\Filament\Resources\AuthorNames\Pages\CreateAuthorName;
use App\Filament\Resources\AuthorNames\Pages\EditAuthorName;
use App\Filament\Resources\AuthorNames\Pages\ListAuthorNames;
use App\Filament\Resources\AuthorNames\Schemas\AuthorNameForm;
use App\Filament\Resources\AuthorNames\Tables\AuthorNamesTable;
use App\Models\AuthorName;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AuthorNameResource extends Resource
{
    protected static ?string $model = AuthorName::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Users;

    public static function form(Schema $schema): Schema
    {
        return AuthorNameForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AuthorNamesTable::configure($table);
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
            'index' => ListAuthorNames::route('/'),
            'create' => CreateAuthorName::route('/create'),
            'edit' => EditAuthorName::route('/{record}/edit'),
        ];
    }
}
