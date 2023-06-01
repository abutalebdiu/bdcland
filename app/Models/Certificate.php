<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Plusemon\Uploader\HasUploader;

class Certificate extends Model
{
    use HasFactory,HasUploader;

    protected $fillable  = [
        'name',
        'image',
        'short_description',
        'long_description',
        'status'
   ];


}
