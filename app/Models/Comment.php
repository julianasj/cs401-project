<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function comments(): HasMany {
        return $this->hasMany(Comment::class);
    }
    public function users(): BelongsTo {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function posts(): BelongsTo {
        return $this->belongsTo(Post::class, 'post_id');
    }
    public function comment(): BelongsTo {
        return $this->belongsTo(Comment::class, 'parent_comment_id');
    }
}
