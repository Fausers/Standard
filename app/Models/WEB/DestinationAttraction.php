<?php

namespace App\Models\WEB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DestinationAttraction extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'destination_id',
        'title',
        'desc',
        'image',
    ];

    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }
}
