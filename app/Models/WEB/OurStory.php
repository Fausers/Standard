<?php

namespace App\Models\WEB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OurStory extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'story',
    ];
}
