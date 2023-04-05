<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Plusemon\Uploader\HasUploader;

class Project extends Model
{
    use HasFactory,HasUploader;

    protected $fillable = [
        'project_type_id',
        'title',
        'description',
        'image',
        'tax_year_id',
        'budget',
        'status',
    ];


    public function project_type()
    {
        return $this->belongsTo(ProjectType::class, 'project_type_id');
    }
    public function year()
    {
        return $this->belongsTo(TaxYear::class, 'tax_year_id');
    }


}
