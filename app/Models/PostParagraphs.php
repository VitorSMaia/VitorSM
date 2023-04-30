<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostParagraphs extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

     protected $fillable = ['post_id', 'content', 'order'];

    public function post(): HasMany
    {
        return  $this->hasMany(Post::class, 'id', 'post_id')->orderBy('order', 'ASC');
    }
}
