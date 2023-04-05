<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Plusemon\Uploader\HasUploader;
class Gallery extends Model
{
    use HasFactory, HasUploader;

    protected $fillable = [
        'name',
        'name_bn',
        'image',
        'status'
    ];


}
