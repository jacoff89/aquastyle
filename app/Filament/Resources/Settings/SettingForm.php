<?php

namespace App\Filament\Resources\Settings;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('key')
                    ->disabled()
                    ->label('Параметр')
                    ->formatStateUsing(fn(string $state) => SettingResource::$labels[$state] ?? $state),

                TextInput::make('value')
                    ->label('Значение')
                    ->required(),
            ]);
    }
}
