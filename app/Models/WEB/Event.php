<?php

namespace App\Models\WEB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'address',
        'phone',
        'email',
        'start_date',
        'end_date',
        'start_time',
        'end_time',
        'organizer',
        'venue',
        'image',
        'desc',
        'description',
        'tag',
        'status',
    ];

    public function speakers()
    {
        return $this->hasMany(EventSpeaker::class);
    }

    public function images()
    {
        return $this->hasMany(EventImage::class);
    }
}
