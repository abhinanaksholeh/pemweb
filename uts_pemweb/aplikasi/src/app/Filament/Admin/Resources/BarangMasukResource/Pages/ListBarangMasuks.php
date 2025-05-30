<?php

namespace App\Filament\Admin\Resources\BarangMasukResource\Pages;

use App\Filament\Admin\Resources\BarangMasukResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBarangMasuks extends ListRecords
{
    protected static string $resource = BarangMasukResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
