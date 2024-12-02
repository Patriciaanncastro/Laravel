<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'Name',
        'email',
        'Objectives',
        'Dateofbirth',
        'image',
        'Placeofbirth',
        'Civilstatus',
        'Religion',
        'Citizenship',
        'gender',
        'phoneNumber',
        'website',
        'degree',
        'institute',
        'Characterreference',
        'certification_title',
        'certification_date',
        'jobtitle',
        'jobdescription',
        'organization',
        'skills',
        'status',
        'startdate',
        'enddate',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
