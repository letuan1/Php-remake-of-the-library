<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 21/09/2018
 * Time: 12:23
 */

abstract class BaseModel
{
    private $host = "localhost";
    private $user = "root";
    private $db = "latest_library";
    private $pass = "123456";


    public function __construct()
    {

        $this->conn = new PDO("mysql:host=" . $this->host . "; dbname=" . $this->db, $this->user, $this->pass);
    }

    public function getData($table) {
        $sql = "SELECT * FROM $table";
        $query = $this->conn->query($sql);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getById( $table, $id) {
        $sql = "SELECT * FROM $table WHERE id = $id";
        $query = $this->conn->query($sql);
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function delete($table, $id) {
        $sql = "DELETE FROM $table WHERE id = $id";
        $this->conn->query($sql);
    }
}