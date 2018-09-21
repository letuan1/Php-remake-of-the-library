<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 21/09/2018
 * Time: 13:12
 */

if (isset($_GET['id'])){
    $id = $_GET['id'];
}

if (isset($_GET['id_categries'])){
    $idCategori = $_GET['id_categries'];
}
require "../database/Book.php" ;
$books = new Book();

    $table = "books";
    $delete = $books->delete($table, $id);

?>

