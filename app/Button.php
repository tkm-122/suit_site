<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Button extends Model
{
  protected $fillable = [
    'button_id','name','price','image',
  ];
}
