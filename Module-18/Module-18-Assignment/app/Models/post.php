<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class post extends Model
{
    public function category()
    {
        return $this->belongsTo(categorie::class);
    }
    public static function getTotalPostsByCategory($categoryId)
    {
        return self::where('category_id', $categoryId)->count();
    }
    use SoftDeletes; 
    public static function getSoftDeletedPosts()
    {
        return self::withTrashed()->whereNotNull('deleted_at')->get();
    }
}
