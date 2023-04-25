<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    // nama tabel
    protected $table = 'user';
    
    // unable colom timestamp
    public $timestamps = false;

    // inisisasi yang bisa diisi
    protected $fillable = [
        'username',
        'password'
    ];
}
