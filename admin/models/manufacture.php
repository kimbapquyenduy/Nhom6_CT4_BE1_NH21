<?php
class Manufacture extends Db
{
    public function getAllManu()
    {
        $sql = self::$connection->prepare("SELECT * FROM manufactures");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function delManu($id)
    {
        $sql = self::$connection->prepare("DELETE FROM `manufactures` WHERE manu_id=? ");
        $sql->bind_param("i", $id);

        return $sql->execute(); //return an object
    }
    public function addManu($manu_id, $manu_name)
    {
        $sql = self::$connection->prepare("INSERT INTO `manufactures`(`manu_id`, `manu_name`) VALUES (?,?)");
        $sql->bind_param("is", $manu_id, $manu_name);

        return $sql->execute(); //return an object
    }
    public function editmanu($manu_name, $manu_id)
    {
        $sql = self::$connection->prepare("UPDATE `manufactures` SET `manu_name`=? WHERE manu_id=?");
        $sql->bind_param("si", $manu_name, $manu_id);
        //return an object

        return  $sql->execute();
    }
    public function getmanuById($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM manufactures WHERE manu_id = ?");
        $sql->bind_param("i", $id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
}
