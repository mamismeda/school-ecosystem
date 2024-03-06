<?php

// home controller 
class Home extends Controller
{
    function index()
    {
        $db = new Database();
        $data = $db->query("SELECT * from users");
        echo $this->view('home', ['rows' => $data]);
    }
}
