<?php

namespace App\Filament\Resources\Pages\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class PageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->name('Заголовок')
                    ->required(),
                TextInput::make('slug')
                    ->name('Ссылка')
                    ->required(),
                Textarea::make('content')
                    ->name('Содержание')
                    ->columnSpanFull(),
            ]);
    }
}
