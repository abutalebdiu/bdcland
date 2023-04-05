<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory,Sluggable;

    protected $fillable = ['name','name_bn','status'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function category_blog_post_count()
    {
        return $this->hasMany(Blog::class,'blog_category_id','id',);
    }

}
