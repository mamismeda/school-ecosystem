<?php

// home controller 
class Profile extends Controller
{
    function index()
    {
       echo $this->view('profile');
    }
}