<?php

// user model
class User extends Model
{
    public function validate($DATA)
    {
        $this->errors = array();

        // check for password 
        if($DATA['password'] != $DATA['password2'])
        {
            $this->errors[] = "This passwords do not match";
        }

        if(count($this->errors) == 0)
        {
            return true;
        }
        return false;
    }
}
