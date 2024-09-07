<?php
namespace App\Repositories;
use App\Models\ContactUs;

class ContactusRepository extends SolidBaseRepository
{
     protected $model;
    public function __construct(ContactUs $model)
    {
        $this->model = $model;
    }

   public function getFillable(){
        return ['name','description'];
    }


}
