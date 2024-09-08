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
        $banner = $request->file('banner_img');
        $file = $request->file('file');

        if($banner==null)
        {
            $banner_img_path=$newsAndEvent->banner_img;
        }else{
            if($newsAndEvent) {
                Storage::disk('local')->delete($newsAndEvent->banner_img);
            }
            $banner_extension = $banner->getClientOriginalExtension();
            $uniqueCode = Carbon::now()->format('Y_m_d') . uniqid() . '_' . time();
            $banner_img_path= 'news-and-events/banners/' . $uniqueCode . '.' . $banner_extension;
            Storage::disk('local')->putFileAs('public/news-and-events/banners/', $banner, $uniqueCode . '.' . $banner_extension);
        }

        if($file==null) {

            $file_path=$newsAndEvent->file;
            $file_name=$newsAndEvent->original_file_name;
            $file_size=$newsAndEvent->file_size;
        }else{
            if($newsAndEvent) {
                Storage::disk('local')->delete($newsAndEvent->file);
            }
            $file_size=$file->getSize();
            $file_name = $file->getClientOriginalName();
            $file_extension = $file->getClientOriginalExtension();
            $uniqueCode = Carbon::now()->format('Y_m_d') . uniqid() . '_' . time();
            $file_path = 'news-and-events/files/' . $uniqueCode . '.' . $file_extension;
            Storage::disk('local')->putFileAs('public/news-and-events/files/', $file, $uniqueCode . '.' . $file_extension);
        }
        $type=$request->get('type');
        return $this->model->updateOrCreate(
            ['id'=>$id],[
            'title' => $request->get('title'),
            'banner_img' => $banner_img_path,
            'type' => $type,
            'description' => $request->get('description'),
            'file' => $file_path,
            'original_file_name' => $file_name,
            'file_size' => $file_size,
            'event_start_date' => $type=='event'?$request->get('event_start_date'):null,
            'event_end_date' =>  $type=='event'?$request->get('event_end_date'):null,
            'published_date'=>Carbon::now()->format('Y-m-d')

        ]);
    }
}
