<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    // protected $fillable = ['name'];
    protected $fillable = ['name', 'telephone', 'email', 'message', 'status'];
}
