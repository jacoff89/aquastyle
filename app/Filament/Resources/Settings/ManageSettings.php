<?php

namespace App\Filament\Resources\Settings;

//use Filament\Actions\CreateAction;
use App\Models\Setting;
use Filament\Resources\Pages\ListRecords;

class ManageSettings extends ListRecords
{
    protected static string $resource = SettingResource::class;

    protected static ?string $title = 'Настройки';

    protected function getHeaderActions(): array
    {
        return [
            //CreateAction::make(),
        ];
    }

    public function mount(): void
    {
        parent::mount();

        foreach (SettingResource::$labels as $key => $label) {
            Setting::firstOrCreate(
                ['key' => $key],
                ['value' => '']
            );
        }
    }

    public static function canCreate(): bool { return false; }
    public static function canDelete($record): bool { return false; }
    public static function canForceDelete($record): bool { return false; }
}
