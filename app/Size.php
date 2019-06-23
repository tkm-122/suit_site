<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
  protected $fillable = [
    'size','body'
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
