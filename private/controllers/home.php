<?php

// home controller 
class Home extends Controller
{
    function index()
    {
        $user = new User();


        $arr['firstname'] = 'George';
        $arr['lastname'] = 'Neal';
        //$arr['date'] = '2024-03-06 03:34:14';
        //$arr['user_id'] = 'dnd';
        //$arr['gender'] = 'male';
        //$arr['school_id'] = 'asda';
        //$arr['rank'] = 'student';

        //$user->insert($arr);
        $user->update(3,$arr);

        $data = $user->findAll();

        // $data =$user->where('firstname', 'john');

        $this->view('home', ['rows' => $data]);
    }
}
