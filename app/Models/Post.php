<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'visible',
        'body',
        'tag'
    ];

    public function scopeVisible(Builder $query): void
    {
        $query->where('visible', 1);
    }
}
