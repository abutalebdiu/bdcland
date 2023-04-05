<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class ProjectType extends Model
{
    use HasFactory,Sluggable;

    protected $fillable  = [
         'slug',
         'name',
         'name_bn',
         'status'
    ];


    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
    
}
