<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Plusemon\Uploader\HasUploader;

class Blog extends Model
{
    use HasFactory, HasUploader,Sluggable;

    protected $fillable = ['user_id','title','title_bn','slug','blog_category_id','image','description','description_ar','status'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }


    public function category()
    {
        return $this->belongsTo(BlogCategory::class,'blog_category_id');
    }

}
