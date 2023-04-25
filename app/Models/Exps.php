<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exps extends Model
{
    use HasFactory;

    protected $table = 'exp';
    protected $primary_key = 'ID';
    public $timestamps = false;
    protected $fillable = ['name', 'detail'];
}
