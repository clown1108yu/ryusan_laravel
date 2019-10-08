<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * モデルと関連しているテーブル
     *
     * @var string
     */
    protected $table = 'orders';

    /**
     * 日付へキャストする属性
     *
     * @var array
     */
    protected $dates = ['created_at','updated_at'];

}
