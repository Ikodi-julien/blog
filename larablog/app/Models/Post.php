<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'author',
        'title',
        'short',
        'content_path',
        'read_duration'
    ];
    public function categories() {
        return $this->belongsToMany(Category::class, 'post_category');
    }
}
