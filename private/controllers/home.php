<?php

// home controller 
class Home extends Controller
{
    function index()
    {
        $user = $this->load_model('user');
        //$data = $db->query("SELECT * from users");

        $data =$user->where('firstname', 'john');
        echo $this->view('home', ['rows' => $data]);
    }
}
