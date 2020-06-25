<?php namespace App\Models;
use CodeIgniter\Model;


class Newf extends Model
{  protected $table= 'data';
    protected $allowedFields=['name','password'];
    
   
    public function getpost($dat = null)
    {
       if(!$dat){

           return $this->findAll();
       }
       return $this -> asArray()
                    -> where (['name' => $dat])
                    -> first();
    }

    public function comment()
    {
        echo 'I am not flat!';
    }


}



?>