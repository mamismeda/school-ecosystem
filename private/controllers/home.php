<?php

// home controller 
class Home extends Controller
{
    function index()
    {
        $user = new User();

        $data = $user->findAll();

       // $data =$user->where('firstname', 'john');
       $user->insert($data);
       
        $this->view('home', ['rows' => $data]);
    }
}
