<?php
namespace App\Repositories;
use App\Models\Download;

class DownloadRepository extends SolidBaseRepository
{
     protected $model;
    public function __construct(Download $model)
    {
        $this->model = $model;
    }

   public function getFillable(){
        return ['name','thumbnail','description','file'];
    }


}
