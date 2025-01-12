<?php

namespace BlogLaravel\Blog\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Blog extends Model
{

    use HasFactory;

    protected $fillable = [
        'sort',
        'uuid',
        'slug',
        'title',
        'subtitle',
        'body',
        'is_published',
        'featured',
        'morphable_id',
        'morphable_type',
        'category_id',
        'admin_id',
        'published_at',
        'visits_count',
    ];
}
