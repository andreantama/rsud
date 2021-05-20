<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;
    protected  $table = "anggotas";
    protected $guarded = [];
    protected $dates = ['created_at', 'updated_at'];
}
