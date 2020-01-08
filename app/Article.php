<?php

namespace App;

use App\Traits\SearchableTrait;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use SearchableTrait;
    //
    protected $casts = [
        'tags' => 'json',
    ];
}
