<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  protected $fillable = [
    'user_id','status','item_id','inseam_id','hem_id','waist_id','skidproof_id','size_id','price',
  ];


  /**
   * Eloquentのリレーション
   * Userテーブルとのリレーション
   */
  public function user()
  {
  return $this->belongsTo('App\User');
  }


  /**
   * Eloquentのリレーション
   * Itemテーブルとのリレーション(スーツ)
   */
  public function item()
  {
  return $this->belongsTo('App\Item');
  }

  /**
   * Eloquentのリレーション
   * Inseamテーブルとのリレーション(股下)
   */
  public function inseam()
  {
  return $this->belongsTo('App\Inseam');
  }

  /**
   * Eloquentのリレーション
   * Hemテーブルとのリレーション(袖)
   */
  public function hem()
  {
  return $this->belongsTo('App\Hem');
  }

  /**
   * Eloquentのリレーション
   * Waistテーブルとのリレーション
   */
  public function waist()
  {
  return $this->belongsTo('App\Waist');
  }

  /**
   * Eloquentのリレーション
   * Skidproofテーブルとのリレーション
   */
  public function skidproof()
  {
  return $this->belongsTo('App\Skidproof');
  }

  /**
   * Eloquentのリレーション
   * Sizeテーブルとのリレーション
   */
  public function size()
  {
  return $this->belongsTo('App\Size');
  }
}
