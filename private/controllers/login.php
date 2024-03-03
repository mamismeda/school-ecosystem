<?php

// login controller 
class Login extends Controller
{
    function index()
    {
        echo $this->view('login');
    }
}
