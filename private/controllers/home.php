<?php

// home controller 
class Home extends Controller
{
    function index()
    {
        $user = $this->load_model('user');
        $data = $user->findAll();

       // $data =$user->where('firstname', 'john');
        echo $this->view('home', ['rows' => $data]);
    }
}
