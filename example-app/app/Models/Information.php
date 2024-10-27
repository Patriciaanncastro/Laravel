<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    protected $table = 'Informations';

    protected $fillable = [
    'Name',
    'Contact',
    'Email',
    'Objectives',
    'Address',
    'Skills',
    'Certification',
    'Education',
    'Experience',
    'Character References'
    ];

}
