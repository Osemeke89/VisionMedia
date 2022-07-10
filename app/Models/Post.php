<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = ['title', 'slug', 'description', 'content', 'category', 'image_path', 'user_id'];

    public function user(){
        return $this->belongsTo(user::class);
    }

    public function sluggable(): array{
        return [
            'slug' => [
                'source' => 'title'
            ] 
        ];
    }
}
