<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class My_Parent extends Model
{
    use HasFactory, HasTranslations;
    protected $guarded = [];
    protected $table = 'my__parents';
    public $translatable = ['Name_Father','Job_Father','Name_Mother','Job_Mother'];

        // علاقة بين اولياء الامور والصور لجلب اسم الصور  في جدول الصور
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
