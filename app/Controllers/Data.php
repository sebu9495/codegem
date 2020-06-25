<?php namespace App\Controllers;

use App\Models\Newf;
use CodeIgniter\Controller;


class Data extends Controller
{

	function post($dt)
        {    $model =new Newf();
                $data['post'] = $model->getPost($dt);

        echo view('templetes/header',$data);
        echo view('detail/detail');
        echo view('templetes/footer');

	
		
        }
        function create()
        { $model =new Newf();

                helper('form');
               
                if( ! $this -> validate(['usr' => 'required|min_length[3]|max_length[20]',
                'pwd'=> 'required|min_length[3]'
                
                ]))
                {

                        echo view('templetes/header');
                        echo view('blog/Newf');
                        echo view('templetes/footer');



                }
                else{

                        $model->save(

                                [
                                        'name'=> $this->request->getVar('usr'),
                                        'password'=> $this->request->getVar('pwd'),
                                ]
                                );

                                $session=\Config\Services::session();
                                $session->setFlashdata('success','new data entered');
                                return redirect()->to('/');
                  
                }
               
                
        }
	//--------------------------------------------------------------------


}

