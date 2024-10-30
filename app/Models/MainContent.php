<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainContent extends Model
{
    use HasFactory;

    protected $fillable = [
        'services_title_ar',
        'services_title_en',


        'header_logo_ar',
        'header_logo_height_ar',
        'header_logo_width_ar',

        'header_logo_en',
        'header_logo_height_en',
        'header_logo_width_en',


        'footer_logo_ar',
        'footer_logo_height_ar',
        'footer_logo_width_ar',

        'footer_logo_en',
        'footer_logo_height_en',
        'footer_logo_width_en',
    ];
}
