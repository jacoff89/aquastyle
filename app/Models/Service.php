<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Service extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
        'price'
    ];

    protected static function booted(): void
    {
        // Удаление файла при удалении записи
        static::deleting(function (Service $service) {
            if ($service->image) {
                Storage::disk('public')->delete($service->image);
            }
        });

        // Удаление старого файла при обновлении
        static::updating(function (Service $service) {
            // получаем старый путь до обновления
            $oldImage = $service->getOriginal('image');
            $newImage = $service->image;

            // если путь изменился — удаляем старый файл
            if ($oldImage && $oldImage !== $newImage && Storage::disk('public')->exists($oldImage)) {
                Storage::disk('public')->delete($oldImage);
            }
        });
    }
}
