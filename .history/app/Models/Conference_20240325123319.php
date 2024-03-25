<?php

namespace App\Models;
use App\Conference;


use Illuminate\Database\Eloquent\Model;

class Conference extends Model
{
    protected $fillable = ['title', 'description', 'date'];

    public function sessions()
    {
        return $this->hasMany(Session::class);
    }
}
