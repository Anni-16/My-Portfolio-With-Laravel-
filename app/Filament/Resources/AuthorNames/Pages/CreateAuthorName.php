<?php

namespace App\Filament\Resources\AuthorNames\Pages;

use App\Filament\Resources\AuthorNames\AuthorNameResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;

class CreateAuthorName extends CreateRecord
{
    protected static string $resource = AuthorNameResource::class;
    protected static bool $canCreateAnother = false;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Author Name')
            ->body('The Author Name has been created successfully.');
    }
}
