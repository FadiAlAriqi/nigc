<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurBusiness extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_ar',
        'title_en',
        'business_description_ar',
        'business_description_en',
        'note_ar',
        'note_en',
    ];

    public function our_business_images()
    {
        return $this->hasMany(OurBusinessImages::class);
    }

    // Relationship to get the default image
    public function defaultImage()
    {
        return $this->hasOne(OurBusinessImages::class)->where('is_default', true);
    }
}
