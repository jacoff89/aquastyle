<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
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

    protected function formattedPrice(): Attribute
    {
        return Attribute::make(
            get: function () {
                $price = (int) $this->price;

                $formatted = number_format($price, 0, '.', ' ');

                $cases = [2, 0, 1, 1, 1, 2];
                $titles = ['рубль', 'рубля', 'рублей'];

                $word = $titles[
                ($price % 100 > 4 && $price % 100 < 20)
                    ? 2
                    : $cases[min($price % 10, 5)]
                ];

                return "{$formatted} {$word}";
            }
        );
    }

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
