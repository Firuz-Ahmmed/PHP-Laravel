<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorie extends Model
{
    public function getLatestPost()
    {
        return $this->posts()->latest()->first();
    }
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
