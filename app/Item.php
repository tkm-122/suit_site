<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
  protected $fillable = [
    'name','code','image_top','image_cloth','image_sub1','image_sub2','image_sub3','image_sub4','image_sub5','image_sub6','description','comment','price'
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
