<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Session;

class Session extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'start_time', 'end_time', 'conference_id', 'speaker_id'];

    public function conference()
    {
        return $this->belongsTo(Conference::class);
    }

    public function speaker()
    {
        return $this->belongsTo(Speaker::class);
    }
}

