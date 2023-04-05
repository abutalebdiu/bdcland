<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Plusemon\Uploader\HasUploader;
use Cviebrock\EloquentSluggable\Sluggable;

class News extends Model
{
    use HasFactory,HasUploader,Sluggable;

    protected $fillable = [
        'title',
        'title_bn',
        'image',
        'description',
        'description_ar',
        'status',
        'slug',
    ];


    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
