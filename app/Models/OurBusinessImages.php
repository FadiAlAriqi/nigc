<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurBusinessImages extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'our_business_id',
    ];


    public function our_business()
    {
        return $this->belongsTo(OurBusiness::class);
    }
}
