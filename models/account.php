<?php
class Account extends Db
{

    public function getAllAccount()
    {
        $sql = self::$connection->prepare("SELECT * FROM accounts");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function checkUserName($username)
    {
        $sql = self::$connection->prepare("SELECT username FROM accounts where username =? ");
        $sql->bind_param("s", $username);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->num_rows;
        if ($items == 1) {
            return false;
        } else {
            return true;
        }
    }
    public function addAc($username, $password)
    {    $password = md5($password);
        $sql = self::$connection->prepare("INSERT INTO `accounts`(`username`, `password`,`role`) VALUES (?,?,?)");
        $role=2;
        $sql->bind_param("ssi", $username, $password,$role);

        return $sql->execute(); //return an object
    }

    
    public function checklogin($username, $password)
    {

        $sql = self::$connection->prepare("SELECT * FROM accounts where `username`=? and `password`=?");
        $password = md5($password);
        $sql->bind_param("ss", $username, $password);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->num_rows;
        if ($items == 1) {
            return true;
        } else {
            return false;
        }
        //return an array
    }
}
