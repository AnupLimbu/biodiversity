<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

        /**
         * The attributes that are mass assignable.
         *
         * @var array<int, string>
         */
    protected $table = 'projects';
    protected $fillable = ['title','start_date','end_date','status','image','description'];
    protected $hidden= [];
    protected $casts= [];
    protected $with= [];
}
