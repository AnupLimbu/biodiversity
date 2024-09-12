<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $table= 'gallery';
    protected $fillable= ['name','thumbnail','description','order'];
    protected $hidden= []; //hidden fields
    protected $casts= [];   //dates to cast
    protected $with= [];     // default relation


}
