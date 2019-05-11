<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ZdCarType extends Model
{
    const CREATED_AT = 'create_time';
    const UPDATED_AT = 'modify_time';
    public $timestamps = true;

    protected $table = "sys_car_type";
    protected $fillable=['id','name','code','capacity','length','width','height','remark','icon','spec','is_join'];


    /**
     * 排序
     * @param $query
     * @return mixed
     * @author Mark
     * @date 2018/5/25 10:00
     */
    public function scopeOrderWith($query)
    {
        return $query->orderBy('id', 'asc');
    }

    public function carType()
    {
        return $this->hasOne(ZdCarType::class, 'id', 'car_type_id');
    }
}