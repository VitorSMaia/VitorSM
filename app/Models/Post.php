<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\hasMany;

class Post extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['title', 'detail', 'image', 'status'];


    public function paragraph(): HasMany
    {
        return  $this->hasMany(PostParagraphs::class, 'post_id', 'id')->orderBy('order', 'ASC');
    }
}
