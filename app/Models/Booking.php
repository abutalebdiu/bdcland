<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable  = [
        'name',
        'companyname',
        'designation',
        'phone',
        'alternative_phone',
        'email',
        'alternative_email',
        'address',
        'comments',
        'status'
   ];
}
