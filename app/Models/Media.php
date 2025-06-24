<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Media extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function posts(): BelongsTo {
        return $this->belongsTo(Post::class);
    }
}
