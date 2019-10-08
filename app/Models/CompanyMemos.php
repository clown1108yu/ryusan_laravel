<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyMemos extends Model
{

    /**
     * 日付へキャストする属性
     *
     * @var array
     */
    protected $dates = ['created_at','updated_at'];

}
