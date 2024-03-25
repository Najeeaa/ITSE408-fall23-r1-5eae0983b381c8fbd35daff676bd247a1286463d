<?php

namespace App\Models;
use App\Conferences;


use Illuminate\Database\Eloquent\Model;

class Conferences extends Model
{
    protected $fillable = ['title', 'description', 'date'];

    public function sessions()
    {
        return $this->hasMany(Session::class);
    }
}
