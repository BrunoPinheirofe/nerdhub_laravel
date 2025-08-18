<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    use HasFactory;

    // Permite o preenchimento em massa destes campos
    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'title',
        'bio',
        'photo_path',
        'social_links'
    ];

    protected $casts = [
        'social_links' => 'array', 
    ];

    /**
     * Get the user that owns the profile.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
