<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class MainSlide extends Model
{
    protected $fillable = [
        'text1',
        'text2',
        'image',
    ];

    protected static function booted(): void
    {
        // Удаление файла при удалении записи
        static::deleting(function (MainSlide $mainSlide) {
            if ($mainSlide->image) {
                Storage::disk('public')->delete($mainSlide->image);
            }
        });

        // Удаление старого файла при обновлении
        static::updating(function (MainSlide $mainSlide) {
            // получаем старый путь до обновления
            $oldImage = $mainSlide->getOriginal('image');
            $newImage = $mainSlide->image;

            // если путь изменился — удаляем старый файл
            if ($oldImage && $oldImage !== $newImage && Storage::disk('public')->exists($oldImage)) {
                Storage::disk('public')->delete($oldImage);
            }
        });
    }
}
