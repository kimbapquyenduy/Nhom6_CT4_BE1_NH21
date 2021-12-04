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
    public function editprotypes($type_name, $type_id)
    {
        $sql = self::$connection->prepare("UPDATE `protypes` SET `type_name`=? WHERE `type_id`=?");
        $sql->bind_param("si", $type_name, $type_id);
        //return an object

        return  $sql->execute();
    }
    public function getprotypesById($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM protypes WHERE `type_id` = ?");
        $sql->bind_param("i", $id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
}
