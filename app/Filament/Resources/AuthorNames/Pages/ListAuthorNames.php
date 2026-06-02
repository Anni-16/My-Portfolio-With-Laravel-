<?php

namespace App\Filament\Resources\AuthorNames\Pages;

use App\Filament\Resources\AuthorNames\AuthorNameResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAuthorNames extends ListRecords
{
    protected static string $resource = AuthorNameResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
