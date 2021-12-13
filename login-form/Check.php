<?php
require "models/account.php";

class User
{


    public function login($username, $password)
    {
        $account = new Account;
        $accountarr = $account->getAllAccount();
        foreach ($accountarr as  $value) {

            $s = password_hash($value, PASSWORD_DEFAULT);

            if ($username == "admin" && password_verify($password, $s)) {
                return true;
            } else return false;
        }
    }
}
