<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    //
    protected $fillable = [
        'province',
        'city',
        'district',
        'address',
        'zip',
        'contact_name',
        'contact_phone',
        'last_used_at',
    ];
    protected $dates = ['last_used_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     * 一对多：一个用户可以有多个地址，多个地址只能有一个用户
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return string
     * 创建了一个访问器
     * 可以直接通过 $address->full_address 来获取完整的地址，而不用每次都去拼接.
     */
    public function getFullAddressAttribute()
    {
        return "{$this->province}{$this->city}{$this->district}{$this->address}";
    }

    
}
