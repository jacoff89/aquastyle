<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->name('Заголовок')
                    ->required(),
                Textarea::make('description')
                    ->label('Краткое описание')
                    ->rows(3)
                    ->maxLength(500)
                    ->required(),
                FileUpload::make('image')
                    ->name('Изображение')
                    ->disk('public')
                    ->directory('services')
                    ->image()
                    ->imageResizeMode('force')
                    ->imageCropAspectRatio('340:243')
                    ->imageResizeTargetWidth(340)
                    ->imageResizeTargetHeight(243)
                    ->required(),
                TextInput::make('price')
                    ->label('Цена')
                    ->required()
                    ->numeric()
                    ->minValue(0)
                    ->prefix('₽'),
            ]);
    }
}
