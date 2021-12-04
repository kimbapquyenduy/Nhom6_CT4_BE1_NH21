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
}
