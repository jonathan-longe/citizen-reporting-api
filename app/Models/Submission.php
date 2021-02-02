<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    use HasFactory;

    protected $fillable = [
        'lat',
        'lon',
        'incident-date',
        'while-i-was',
        'relationship',
        'incident-type',
        'involving',
        'involving-2',
        'injured',
        'was-police-informed',
        'possible-cause',
        'contributed',
        'what-happened'
    ];

}
