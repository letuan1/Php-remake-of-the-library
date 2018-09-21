<?php
require "database/Book.php";

$book = new Book();
$table = "books";
$table2 = "categories";
$books = $book->jont();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/x-icon"
          href="https://static.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico"/>
    <link rel="mask-icon" type=""
          href="https://static.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg"
          color="#111"/>
    <link type="text/css" rel="stylesheet" href="css/index.css">

    <title>CodePen - Responstable 2.0: a responsive table solution</title>

    <script>
        window.console = window.console || function (t) {
        };
    </script>


    <script>
        if (document.location.search.match(/type=embed/gi)) {
            window.parent.postMessage("resize", "*");
        }
    </script>


</head>

<body translate="no">

<h1> <span>Books</span></h1>

<div class='nav'>
    <ul>
        <li>
            <a href='../categories/index.php'>Categories</a>
        </li>
        <li>
            <a href='../books/index.php'>
               Books
            </a>
        </li>
        <li>
            <a href='#'>Oder</a>
        </li>
        <li>
            <a href='#'>student</a>
        </li>
        <li>
            <a href='#contact'>
                <div class='fa fa-envelope'></div>
            </a>
        </li>
    </ul>
</div>
<h2 style="color: yellow"><a href="layout/insert.php" target="_blank" style="color: yellow">Add one element to the student table</a></h2>

<table class="responstable">

    <tr>
        <th>ID</th>
        <th data-th="Driver details"><span>Name</span></th>
        <th>Name Category</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>
    <?php foreach ($books as $book) : ?>
        <tr>
            <td><?php echo $book['id'] ?></td>
            <td><?php echo $book['name_books'] ?></td>
            <td><?php echo $book['name'] ?></td>
            <td><a href="layout/update.php?id=<?php echo $book['id'];?>">Update</a></td>
            <td><a href="layout/delete.php?id=<?php echo $book['id']; echo $book['id_categries']?>">Delete</a></td>

        </tr>
    <?php endforeach; ?>
</table>

<script src='//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js'></script>


</body>

</html>
