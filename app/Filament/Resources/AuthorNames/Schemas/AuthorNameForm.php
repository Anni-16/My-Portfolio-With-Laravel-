<?php

namespace App\Filament\Resources\AuthorNames\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class AuthorNameForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('author_name')
                ->required(),

            FileUpload::make('images')
                ->image()
                ->disk('public')
                ->directory('authors')
                ->required(),
        ]);
    }
}
