<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'registered_id,',
        'title,',
        'slug',
        'author',
        'description',
        'image',
        'category_id',
    ];
}
