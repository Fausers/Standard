<?php

namespace App\Models\WEB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'image',
        'desc',
        'description',
    ];


    public function events()
    {
        return $this->hasMany(Event::class);
    }

    public function safaris()
    {
        return $this->hasMany(Safari::class);
    }
}
