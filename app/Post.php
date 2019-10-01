<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

  protected $fillable = ['title', 'content', 'path'];

  public static function scopeLatest ($query) {
    return $query->orderBy('id', 'asc')->get();
  }

  public function getPathAttribute ($value) {
    return '/uploads/' . $value;
  }

}
