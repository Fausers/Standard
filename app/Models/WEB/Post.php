<?php

namespace App\Models\WEB;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'title',
        'image',
        'desc',
        'description',
        'tag',
        'status',
    ];


    public function author()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
