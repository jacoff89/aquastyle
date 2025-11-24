<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = ['title', 'slug', 'content'];

    // Чтобы Laravel искал модель по slug вместо id
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
