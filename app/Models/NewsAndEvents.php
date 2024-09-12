<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsAndEvents extends Model
{
    use HasFactory;

    public $table='news_and_events';
    public $fillable=['title','type','description','news_and_event_body','published_date','event_start_date','event_end_date','thumbnail'];
    public $timestamps=false;
}
