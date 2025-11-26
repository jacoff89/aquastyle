<?php

namespace App\Filament\Resources\Pages\Schemas;

use Filament\Forms\Components\TextInput;
use AmidEsfahani\FilamentTinyEditor\TinyEditor;
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
                TinyEditor::make('content')
                    ->name('Содержание')
                    ->fileAttachmentsDisk('public')
                    ->fileAttachmentsVisibility('public')
                    ->fileAttachmentsDirectory('uploads/pages')
                    ->columnSpanFull(),
            ]);
    }
}
