<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $table= 'teams';
    protected $fillable=['name','description','type','designation','contact','facebook_link','instagram_link','order','image'];
    protected $hidden= []; //hidden fields
    protected $casts= [];   //dates to cast
    protected $with= [];     // default relation


}
