<?php

namespace App\Filament\Resources\MainSlides\Pages;

use App\Filament\Resources\MainSlides\MainSlideResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMainSlides extends ListRecords
{
    protected static string $resource = MainSlideResource::class;

    public function getTitle(): string
    {
        return 'Слайды на главной';
    }

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
