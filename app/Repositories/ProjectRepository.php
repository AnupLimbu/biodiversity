<?php
namespace App\Repositories;
use App\Models\Project;

class ProjectRepository extends SolidBaseRepository
{
     protected $model;
    public function __construct(Project $model)
    {
        $this->model = $model;
    }

   public function getFillable(){
        return ['name','description','price','stock_quantity','category_id'];
    }


}
