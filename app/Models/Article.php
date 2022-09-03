<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
      'title',
      'slug',
      'user_id',
      'content',
      'image_poster',
      'category_id',
    ];

    protected $hidden = [

    ];
}
