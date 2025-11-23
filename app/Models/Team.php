<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Team extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'image',
        'position'
    ];

    protected static function booted()
    {
        // Удаление файла при удалении записи
        static::deleting(function (Team $team) {
            if ($team->image) {
                Storage::disk('public')->delete($team->image);
            }
        });

        // Удаление старого файла при обновлении
        static::updating(function (Team $team) {
            // получаем старый путь до обновления
            $oldImage = $team->getOriginal('image');
            $newImage = $team->image;

            // если путь изменился — удаляем старый файл
            if ($oldImage && $oldImage !== $newImage && Storage::disk('public')->exists($oldImage)) {
                Storage::disk('public')->delete($oldImage);
            }
        });
    }
}
