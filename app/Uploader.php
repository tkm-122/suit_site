<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uploader extends Model
{
    protected $fillable = [
      'cloth_id','name','design','color','maker','price','image',
    ];
}
