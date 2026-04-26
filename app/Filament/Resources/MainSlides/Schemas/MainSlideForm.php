<?php

namespace App\Filament\Resources\MainSlides\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Spatie\Image\Image;

class MainSlideForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('text1')
                    ->name('Текст 1')
                    ->required(),
                TextInput::make('text2')
                    ->name('Текст 2')
                    ->required(),
                FileUpload::make('image')
                    ->name('Изображение')
                    ->disk('public')
                    ->directory('main_slides')
                    ->image()
                    ->automaticallyResizeImagesMode('force')
                    ->imageAspectRatio('1361:599')
                    ->automaticallyResizeImagesToWidth(1361)
                    ->automaticallyResizeImagesToHeight(599)
                    ->required(),
            ]);
    }
}
