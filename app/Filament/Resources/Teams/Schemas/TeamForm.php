<?php

namespace App\Filament\Resources\Teams\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Spatie\Image\Image;

class TeamForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('first_name')
                    ->name('Имя')
                    ->required(),
                TextInput::make('last_name')
                    ->name('Фамилия')
                    ->required(),
                TextInput::make('position')
                    ->name('Должность')
                    ->required(),
                FileUpload::make('image')
                    ->name('Изображение')
                    ->disk('public')
                    ->directory('teams')
                    ->image()
                    ->imageResizeMode('force')
                    ->imageCropAspectRatio('270:227')
                    ->imageResizeTargetWidth(270)
                    ->imageResizeTargetHeight(227)
                    ->required(),
            ]);
    }
}
