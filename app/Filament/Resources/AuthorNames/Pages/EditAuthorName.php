<?php

namespace App\Filament\Resources\AuthorNames\Pages;

use App\Filament\Resources\AuthorNames\AuthorNameResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAuthorName extends EditRecord
{
    protected static string $resource = AuthorNameResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
