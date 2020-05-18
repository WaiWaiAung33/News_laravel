<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\News;

class News extends Model
{
     protected $table = 'news';
    protected $fillable =['title','detail'];
     // public $timestamps = false;
}
