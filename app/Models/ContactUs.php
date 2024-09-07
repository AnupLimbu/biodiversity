<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;

        /**
         * The attributes that are mass assignable.
         *
         * @var array<int, string>
         */
    protected $table = 'contact_us';
    protected $fillable = ['name','email','number','message'];
    protected $hidden= [];
    protected $casts= [];
    protected $with= [];

}
