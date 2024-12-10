<?php

namespace App\Filament\Resources\ReservasiResource\Pages;

use App\Filament\Resources\ReservasiResource;
use Filament\Pages\Actions\CreateAction; // Tambahkan import ini
use Filament\Resources\Pages\ListRecords;

class ListReservasis extends ListRecords
{
    protected static string $resource = ReservasiResource::class;

    protected function getActions(): array
    {
        return [
            CreateAction::make(), // Gunakan CreateAction dengan namespace yang benar
        ];
    }
}
