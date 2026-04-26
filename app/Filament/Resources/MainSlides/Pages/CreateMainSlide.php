<?php

namespace App\Filament\Resources\MainSlides\Pages;

use App\Filament\Resources\MainSlides\MainSlideResource;
use Filament\Resources\Pages\CreateRecord;

class CreateMainSlide extends CreateRecord
{
    protected static string $resource = MainSlideResource::class;

    public function getTitle(): string
    {
        return 'Добавление слайда на главную';
    }
}
