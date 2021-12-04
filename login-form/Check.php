<?php
class Check
{


    public function login($username, $password)
    {
        $s = password_hash(12345, PASSWORD_DEFAULT);
        if ($username == "admin" && password_verify($password, $s)) {
            return true;
        } else return false;
    }
}
