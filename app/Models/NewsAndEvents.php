<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsAndEvents extends Model
{
    use HasFactory;

    public $table='news_and_events';
    public $fillable=['title','type','description','banner_img','file','original_file_name','file_size',
        'published_date','event_start_date','event_end_date'];
    public $timestamps=false;
}
