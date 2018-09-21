<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 21/09/2018
 * Time: 12:32
 */
require (__DIR__. "/../../BaseModel.php");
class DatabaseCategori extends BaseModel
{
    public function update($name, $id) {
        $sql = "UPDATE categories SET `name`= '$name'WHERE id = $id";
        $query = $this->conn->exec($sql);
    }

    public function insert($name) {
        $sql = "INSERT INTO `categories`(`name`) VALUES ('$name')";
        $query = $this->conn->exec($sql);
    }
}