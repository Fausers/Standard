<?php

namespace App\Models\WEB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Safari extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'image',
        'desc',
        'description',
        'price',
        'days',
        'availability',
        'highlights',
        'status',
        'included',
        'excluded',
    ];

    public function images()
    {
        return $this->hasMany(SafariImage::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
