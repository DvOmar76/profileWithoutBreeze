<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable =[
        'course_title',
        'image_url',
        'certificate_url'
    ];
}
