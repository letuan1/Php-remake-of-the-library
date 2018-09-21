<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 21/09/2018
 * Time: 13:07
 */

require "../database/DatabaseCategories.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$categori = new DatabaseCategori();
$table = "categories";
$delete = $categori->delete($table, $id);
if ($delete == true) {
    header("Location: ../index.php");
    } else {
    echo "bạn phải xóa categori này bên bảng books trước";
}
?>