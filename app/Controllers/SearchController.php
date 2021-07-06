<?php
namespace App\Controllers;
use CodeIgniter\Controller;

class SearchController extends Controller 
{
    public function index(){
        return view('search_form');
    }
    public function search(){
        $search=$this->request->getVar('search');
        $db=\Config\Database::connect();
        $builder=$db->table('flori');
        $builder->like('nume',$search);$builder->orLike('culoare',$search);
        $query=$builder->get();
        $q=$query->getResultArray();
        
        $data['r']=$q;
        return view('search_result',$data);
    }
}

