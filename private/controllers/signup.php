<?php

// login controller 
class Signup extends Controller
{
    function index()
    {

        if(count($_POST) > 0)
        {
            $user = new User();
        }
        $this->view('signup');
    }
}
