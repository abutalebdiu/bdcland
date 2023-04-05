<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'name_bn',
        'country_id',
        'status'
    ];

    public function country()
    {
        return $this->belongsTo(Country::class,'country_id');
    }
}
