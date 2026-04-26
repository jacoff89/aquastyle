<?php

namespace App\Filament\Resources\MainSlides;

use App\Filament\Resources\MainSlides\Pages\CreateMainSlide;
use App\Filament\Resources\MainSlides\Pages\EditMainSlide;
use App\Filament\Resources\MainSlides\Pages\ListMainSlides;
use App\Filament\Resources\MainSlides\Schemas\MainSlideForm;
use App\Filament\Resources\MainSlides\Tables\MainSlidesTable;
use App\Models\MainSlide;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class MainSlideResource extends Resource
{
    protected static ?string $model = MainSlide::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return MainSlideForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MainSlidesTable::configure($table);
    }

    public static function getNavigationLabel(): string { return 'Слайды на главной'; }

    public static function getModelLabel(): string { return 'Слайд на главной'; }

    public static function getPluralModelLabel(): string { return 'Слайды на главной'; }

    public static function getPages(): array
    {
        return [
            'index' => ListMainSlides::route('/'),
            'create' => CreateMainSlide::route('/create'),
            'edit' => EditMainSlide::route('/{record}/edit'),
        ];
    }
}
