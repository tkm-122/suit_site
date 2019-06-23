<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inseam extends Model
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
