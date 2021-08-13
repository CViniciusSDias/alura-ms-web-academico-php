<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['titulo', 'url', 'icone'];
    public $timestamps = false;
}
