<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CV extends Model
{
    // use HasFactory;

    protected $fillable = ['name', 'address',
    'email',
     'contact',
     'summary',
     'education',
     'projects',
     'technical_skills',
     'soft_skills','summary'];
   
}
