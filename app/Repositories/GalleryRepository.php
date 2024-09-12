<?php
namespace App\Repositories;
use App\Models\Gallery;

class GalleryRepository extends SolidBaseRepository
{
     protected $model;
    public function __construct(Gallery $model)
    {
        $this->model = $model;
    }

   public function getFillable(){
        return ['name','thumbnail','description','order'];
    }


}
