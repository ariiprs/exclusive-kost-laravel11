<?php

namespace App\Filament\Resources\KostResource\Pages;

use App\Filament\Resources\KostResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKosts extends ListRecords
{
    protected static string $resource = KostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
