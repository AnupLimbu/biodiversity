<?php

namespace App\Repositories;

use App\Models\NewsAndEvents;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class NewsAndEventsRepository extends SolidBaseRepository
{

    public function __construct(NewsAndEvents $model)
    {
        $this->model = $model;
    }

    public function createOrUpdate($request,$id=null)
    {
        $newsAndEvent=$this->model->find($id);
        $thumbnail = $request->file('thumbnail');

        if($thumbnail==null)
        {
            $thumbnail_path=$newsAndEvent->thumbnail;
        }else{
            if($newsAndEvent) {
                Storage::disk('local')->delete($newsAndEvent->thumbnail);
            }
            $thumbnail_extension = $thumbnail->getClientOriginalExtension();
            $uniqueCode = Carbon::now()->format('Y_m_d') . uniqid() . '_' . time();
            $thumbnail_path= 'news-and-events/thumbnail/' . $uniqueCode . '.' . $thumbnail_extension;
            Storage::disk('local')->putFileAs('public/news-and-events/thumbnail/', $thumbnail, $uniqueCode . '.' . $thumbnail_extension);
        }

        $type=$request->get('type');
        return $this->model->updateOrCreate(
            ['id'=>$id],[
            'title' => $request->get('title'),
            'thumbnail' => $thumbnail_path,
            'type' => $type,
            'description' => $request->get('description'),
            'news_and_event_body' => $request->get('news_and_event_body'),
            'event_start_date' => $type=='event'?$request->get('event_start_date'):null,
            'event_end_date' =>  $type=='event'?$request->get('event_end_date'):null,
            'published_date'=>Carbon::now()->format('Y-m-d')

        ]);
    }
}
