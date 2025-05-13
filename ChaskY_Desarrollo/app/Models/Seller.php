<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Seller extends Model
{
    protected $fillable = [
        'name',
        'position',
        'email',
        'phone',
        'photo',
        'whatsapp',
        'linkedin',
        'bio',
        'slug',
        'user_id',
        'company',
        'address',
        'website',
    ];

    protected static function boot()
    {
        parent::boot();
        
        static::creating(function ($seller) {
            if (!$seller->slug) {
                $seller->slug = Str::slug($seller->name);
            }
        });
    }

    public function getPhotoUrlAttribute()
    {
        return $this->photo
            ? asset('storage/' . $this->photo)
            : 'https://ui-avatars.com/api/?name=' . urlencode($this->name) . '&color=7F9CF5&background=EBF4FF';
    }

    public function getWhatsappLinkAttribute()
    {
        return $this->whatsapp
            ? 'https://wa.me/' . preg_replace('/[^0-9]/', '', $this->whatsapp)
            : null;
    }

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}
