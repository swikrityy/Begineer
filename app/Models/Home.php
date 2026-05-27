<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
   protected $fillable = [
    'hero_title',
    'hero_description',
    'about_title',
    'about_description',
];
}
