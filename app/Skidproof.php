<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skidproof extends Model
{
  protected $fillable = [
    'name','price',
  ];

  /**
  * Eloquentのリレーション
  * orderテーブルとのリレーション
  */
  public function order()
  {
    return $this->hasMany('App\Order');
  }
}
