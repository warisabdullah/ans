<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=['title', 'body', 'image'];
    use HasFactory;
    public function getimageAttribute($image)
    {
        return asset('postimages/'.$image);
    }
}
