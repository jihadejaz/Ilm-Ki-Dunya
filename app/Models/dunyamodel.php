<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dunyamodel extends Model
{
    use HasFactory;

    protected $table = 'students';
    protected $fillable = [

        'firstname',
        'lastname',
        'email',
        'gender',
        'password',
        'dob',
        'image',



    ];
}
