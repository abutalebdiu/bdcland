<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Plusemon\Uploader\HasUploader;

class WebSetting extends Model
{
    use HasFactory, HasUploader;

    protected $fillable = ['site_name','site_name_bn','web_url','description','description_ar','logo','mobile_logo','favicon','footer_logo','meta_title','meta_title_bn','meta_description','meta_description_ar','meta_keyword','meta_keyword_ar','copyright','copyright_ar','email','altemail','phone','altphone','location','address','address_ar','developed_by','developed_by_ar','status'];

}
