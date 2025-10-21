<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'body',
        'published_at',
    ];

    // Inverse relation (many posts belong to one user)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
