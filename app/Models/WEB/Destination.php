<?php

namespace App\Models\WEB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Destination extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'desc',
        'description',
        'title',
        'image',
    ];

    public function attractions()
    {
        return $this->hasMany(DestinationAttraction::class);
    }

}
