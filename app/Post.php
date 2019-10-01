<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public static function scopeLatest ($query) {
      return $query->orderBy('id', 'asc')->get();
    }
}
