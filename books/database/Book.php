<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 21/09/2018
 * Time: 12:47
 */
require(__DIR__ . "/../../BaseModel.php");

class Book extends BaseModel
{

    public function jont()
    {
        $sql = "SELECT books.id, books.name_books, categories.name, books.id_categries FROM books LEFT JOIN categories ON books.id_categries = categories.id";
        $query = $this->conn->query($sql);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function update($name, $id) {
        $sql = "UPDATE books SET `name_books`= '$name'WHERE id = $id";
        $query = $this->conn->exec($sql);
    }

    public function insert($name, $id) {
        $sql = "INSERT INTO books(name_books, id_categries) VALUES ('$name', $id)";
        $this->conn->query($sql);
    }

}
