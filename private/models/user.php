<?php

// user model
class User extends Model
{
    public function validate($DATA)
    {
        $this->errors = array();

        // check for firstname
        if (empty($DATA['firstname']) || !preg_match('/^[a-zA-Z]+$/', $DATA['firstname'])) {
            $this->errors['firstname'] = "Only letters allowed in first name";
        }

        // check for lastname
        if (empty($DATA['lastname']) || !preg_match('/^[a-zA-Z]+$/', $DATA['lastname'])) {
            $this->errors['lastname'] = "Only letters allowed in last name";
        }

        // check for password
        if (empty($DATA['password']) || $DATA['password'] !== $DATA['password2']) {
            $this->errors['password'] = "Password do not match";
        }

        // check for password legnth
        if (strlen($DATA['password']) < 8) {
            $this->errors['password'] = "Password must be at least 8 characters";
        }

        // check for email
        if (empty($DATA['email']) || !filter_var($DATA['email'], FILTER_VALIDATE_EMAIL)) {
            $this->errors['email'] = "Email is not valid";
        }

        // check for gender
        $genders = ['female', 'male'];
        if (empty($DATA['gender']) || !in_array($DATA['gender'], $genders)) {
            $this->errors['gender'] = "Gender is not valid";
        }

        // check for ranks
        $ranks = ['student', 'reception', 'lecturer', 'admin', 'super_admin'];
        if (empty($DATA['rank']) || !in_array($DATA['rank'], $ranks)) {
            $this->errors['rank'] = "Rank is not valid";
        }

        if (count($this->errors) == 0) {
            return true;
        }
        return false;
    }
}
