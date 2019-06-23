<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suit extends Model
{
  protected $fillable = [
    'suit_id','name','price','image','shoulder','waist',
  ];
}
