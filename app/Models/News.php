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
    protected $table = 'news';

    protected $fillable = [
        'title',
        'photo',
        'tags',
        'description',
        'text',
        'activity',
    ];
}
