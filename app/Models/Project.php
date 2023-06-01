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
        'image',
        'layout',
        'mapcode',
        'youtube',
        'short_description',
        'long_description',
        'status'
   ];

   public function projecttype()
    {
        return $this->belongsTo(ProjectType::class,'project_type_id');
    }

}
