<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //tambahhkan ini
    use HasFactory;

    protected $fillable = [
        'name','username','email','password'
    ];
}
