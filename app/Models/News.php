<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'blog_etc_posts';

    protected $fillable = [
        'id',
        'view_count',
    ];
}
