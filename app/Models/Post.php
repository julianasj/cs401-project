<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    public $timestamps = false;
    use HasFactory;
    public function tags(): BelongsToMany {
        return $this->belongsToMany(Tag::class, 'post_tag'); // $this refers to Post. Tag::class is the model. belongsToMany under pivot post_tag.
    }
    public function categories(): BelongsToMany {
        return $this->belongsToMany(Category::class, 'post_category');
    }
    public function users(): BelongsTo {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function comments(): HasMany {
        return $this->hasMany(Comment::class);
    }
    public function posts(): HasMany {
        return $this->hasMany(Post::class);
    }
    public function media(): HasMany {
        return $this->hasMany(Media::class);
    }
}
