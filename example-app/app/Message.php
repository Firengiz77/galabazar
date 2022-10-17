<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Message extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'tel',
        'email',
        'melumat'
    ];
}
