<?php
namespace App\Repositories;
use App\Models\Team;

class TeamRepository extends SolidBaseRepository
{
     protected $model;
    public function __construct(Team $model)
    {
        $this->model = $model;
    }

   public function getFillable(){
        return [];
    }


}
