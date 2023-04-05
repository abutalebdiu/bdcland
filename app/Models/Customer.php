<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'companyname',
        'designation',
        'phone',
        'alternative_phone',
        'email',
        'alternative_email',
        'alternative_email',
        'address',
        'campain_id',
        'status',
    ];


    public function customerbyuser()
    {
        return $this->hasMany(CustomerByUser::class,'customer_id');
    }


    public function assigncustomer()
    {
        return $this->hasOne(CustomerByUser::class,'customer_id');
    }


}
