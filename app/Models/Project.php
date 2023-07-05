<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Plusemon\Uploader\HasUploader;

class Project extends Model
{
    use HasFactory,HasUploader;

    protected $fillable  = [
        'title',
        'project_type_id',
        'images',
        'layout',
        'address',
        'mapcode',
        'youtube',
        'short_description',
        'long_description',
        'status'
   ];

    protected $casts = [
        'images' => 'array',
    ];


    public function projecttype()
    {
        return $this->belongsTo(ProjectType::class,'project_type_id');
    }


    public function getImageAttribute($value)
    {
        if (isset($this->images[0])) return $this->images[0];
        return null;
    }


}
