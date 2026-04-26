<?php

namespace App\Filament\Resources\MainSlides\Pages;

use App\Filament\Resources\MainSlides\MainSlideResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditMainSlide extends EditRecord
{
    protected static string $resource = MainSlideResource::class;

    public function getTitle(): string
    {
        return 'Редактирование слайда на главной';
    }

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
