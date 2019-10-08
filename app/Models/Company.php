<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

class Company extends Model
{
    use Notifiable;

    const TYPE_DENTIST = 1;
    const TYPE_DENTAL_ENGINEER = 2;

    /**
     * モデルと関連しているテーブル
     *
     * @var string
     */
    protected $table = 'companies';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
		'email',
		'type',
		'name',
		'overview',
		'location',
		'telephone',
		'icon',
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

    /**
     * 会社メモを取得
     */
    public function companymemos()
    {
        return $this->hasOne('App\Models\CompanyMemos', 'created_company_id');
    }

    /**
     * 技工所リストを取得
     *
     * @var array
     */
    public static function paginateDentalEngineer() : LengthAwarePaginator
    {
        return self::where('type', self::TYPE_DENTAL_ENGINEER)->paginate();
    }

}
