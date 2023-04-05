<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'customer_id',
        'plot_id',
        'job_title',
        'visit_date',
        'whatsapp',
        'remarks',
        'status_id',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class,'customer_id');
    }

    public function plot()
    {
        return $this->belongsTo(Plot::class,'plot_id');
    }

    public function status()
    {
        return $this->belongsTo(Status::class,'status_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
