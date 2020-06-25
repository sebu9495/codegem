<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Newf;



class Pages extends Controller
{
      

        public function index()
       
        {    
                
        
               
                $model = new Newf();
                $data['card'] =$model->getpost();

	
        echo view('templetes/header',$data);
        echo view('pages/Home');
        echo view('templetes/footer');

	
	}
	function tabs($tab = 'Newf')
	{    
                $model = new Newf();
                $data['card'] =$model->getpost();


        if(! is_file(APPPATH.'/Views/pages/'.$tab.'.php'))
        {

            throw new \CodeIgniter\Exceptions\PageNotFoundException($tab);
        }

        echo view('templetes/header',$data);
        echo view('pages/'.$tab);
        echo view('templetes/footer');

	
		
	}
	//--------------------------------------------------------------------

}
