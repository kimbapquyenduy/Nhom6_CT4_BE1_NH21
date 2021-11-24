<?php
class Protypes extends Db
{

    public function getAllPro()
    {
        $sql = self::$connection->prepare("SELECT * FROM protypes");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function delProtype($tid)
    {
        $sql = self::$connection->prepare("DELETE FROM `protypes` WHERE type_id=? ");
        $sql->bind_param("i", $tid);

        return $sql->execute(); //return an object
    }
    public function addprotype($type_id, $type_name)
    {
        $sql = self::$connection->prepare("INSERT INTO `protypes`(`type_id`, `type_name`) VALUES (?,?)");
        $sql->bind_param("is", $type_id, $type_name);

        return $sql->execute(); //return an object
    }
}
