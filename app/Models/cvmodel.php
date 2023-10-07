<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cvmodel extends Model
{
    use HasFactory;

    protected $table = 'cvdata';
    protected $fillable = [

        'firstname',
        'lastname',
        'number',
        'education',
        'religion',
        'city',
        'address',
        'profession',
        'about',
        'information',
        'information2',
        'experience',
        'picture',
        'skill1',
        'skill2',
        'skill3',
        'skill4',

        




    ];
}
