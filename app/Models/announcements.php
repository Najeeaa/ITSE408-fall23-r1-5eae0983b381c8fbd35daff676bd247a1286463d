<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class announcements extends Model
{
    use HasFactory;
   public $timestamps=false;
   protected $table="announcement";
 protected $fillable = [
    'Name',
    'Status',
    'details',
    'image'
 ];
}
