<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use Notifiable;

    const TYPE_DENTIST = 1;
    const TYPE_DENTAL_ENGINEER = 2;

    /**
     * モデルと関連しているテーブル
     *
     * @var string
     */
    protected $table = 'doctors';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'company_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    /**
     * 日付へキャストする属性
     *
     * @var array
     */
    protected $dates = ['created_at','updated_at'];

    public function companies()
    {
        return $this->belongsTo('App\Companies');
    }


}
