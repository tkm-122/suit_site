<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lining extends Model
{
  protected $fillable = [
    'lining_id','name','price','image',
  ];
}
