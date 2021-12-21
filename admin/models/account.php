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
    public function delAccount($tid)
    {
        $sql = self::$connection->prepare("DELETE FROM `accounts` WHERE userid=? ");
        $sql->bind_param("i", $tid);

        return $sql->execute(); //return an object
    }
    public function addAccount($username, $password)
    {
        $password = md5($password);
        $sql = self::$connection->prepare("INSERT INTO `accounts`(`username`, `password`,`role`) VALUES (?,?,?)");
        $role = 2;
        $sql->bind_param("ssi", $username, $password, $role);

        return $sql->execute(); //return an object


    }
    public function editAccount($username, $password, $id)
    {
        $password = md5($password);
        $sql = self::$connection->prepare("UPDATE `accounts` SET `username`=?, `password`=? WHERE userid=?");
        $sql->bind_param("ssi", $username, $password, $id);
        //return an object

        return  $sql->execute();
    }
    public function getAccountById($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM accounts WHERE `userid` = ?");
        $sql->bind_param("i", $id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
}
