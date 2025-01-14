<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Users extends Model
{
    protected $table = 'product';
    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'phone_number',
        'address',
    ];
}