<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class News extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $fillable =[
        'author',
        'image',
        'date',
        'category',
        'title'
    ];
}
