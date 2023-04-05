<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plot extends Model
{
    use HasFactory;
    protected $fillable = ['name','address','contact','status','created_at','updated_at'];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }


}
