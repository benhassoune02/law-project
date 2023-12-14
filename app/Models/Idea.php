<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'user_id',
        'utilisateur_id',
        'approved',
        'case',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
