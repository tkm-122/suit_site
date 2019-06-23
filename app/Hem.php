<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hem extends Model
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
