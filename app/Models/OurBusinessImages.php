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
        'is_default',
    ];

    public function our_business()
    {
        return $this->belongsTo(OurBusiness::class);
    }

    // Scope to get only default images
    public function scopeDefault($query)
    {
        return $query->where('is_default', true);
    }
}
