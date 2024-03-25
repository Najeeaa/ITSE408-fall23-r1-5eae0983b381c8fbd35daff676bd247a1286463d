<?php

namespace App\Models;
use App\Conference;
    protected $fillable = ['title', 'description', 'date'];

    public function sessions()
    {
        return $this->hasMany(Session::class);
    }
}
