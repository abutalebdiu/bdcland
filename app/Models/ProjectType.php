<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class ProjectType extends Model
{
    use HasFactory,Sluggable;

    protected $fillable  = [
         'p_id',
         'name',
         'name_bn',
         'slug',
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

    public function maintype()
    {
        return $this->belongsTo(ProjectType::class,'p_id','id');
    }

    public function subcategories()
    {
        return $this->hasMany(ProjectType::class,'p_id','id');
    }
}
