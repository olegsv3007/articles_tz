<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'short_text',
        'text',
        'image_filename',
        'author_id',
    ];

    public const IMAGE_FOLDER = '/storage/img/articles/';

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function getArticleImagePublicPathAttribute()
    {
        return asset( self::IMAGE_FOLDER . $this->image_filename);
    }
}
