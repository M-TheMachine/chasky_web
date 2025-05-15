<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

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
        if ($this->photo) {
            return asset('storage/' . $this->photo);
        }
        
        // Si no hay foto, usar la imagen por defecto
        if (Storage::disk('public')->exists('images/default-profile.svg')) {
            return asset('storage/images/default-profile.svg');
        }
        
        // Como respaldo, usar un avatar generado
        return 'https://ui-avatars.com/api/?name=' . urlencode($this->name) . 
               '&background=f4bc21&color=701516&bold=true&size=400';
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
