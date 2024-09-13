<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
    use HasFactory;

    protected $table= 'downloads';
    protected $fillable= ['name','thumbnail','description','file','type'];
    protected $hidden= []; //hidden fields
    protected $casts= [];   //dates to cast
    protected $with= [];     // default relation


}
