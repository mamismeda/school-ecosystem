<?php

// login controller 
class Signup extends Controller
{
    function index()
    {

        $errors = [];
        if (count($_POST) > 0) {
            $user = new User();

            if ($user->validate($_POST)) {
                $arr['firstname'] = $_POST['firstname'];
                $arr['lastname'] = $_POST['lastname'];
                $arr['gender'] = $_POST['gender'];
                $arr['rank'] = $_POST['rank'];
                $arr['email'] = $_POST['email'];
                $arr['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $arr['date'] = date("Y-m-d H:i:s");

                $user->insert($arr);
                $this->redirect('login');
            } else {
                // errors
                $errors = $user->errors;
            }
        }
        $this->view('signup', [
            'errors' => $errors,

        ]);
    }
}
