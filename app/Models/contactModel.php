<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contactModel extends Model
{
    use HasFactory;
    protected $table = 'contactus';
    protected $fillable = [

        'fullname',
        'email',
        'subject',
        'message',
      



    ];
}
