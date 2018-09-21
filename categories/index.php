<?php
require "database/DatabaseCategories.php";

$categorie = new DatabaseCategori();
$table = "categories";
$categories = $categorie->getData($table);
?>
<!DOCTYPE html>
<html lang="en" >

<head>

    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/x-icon" href="https://static.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" />
    <link rel="mask-icon" type="" href="https://static.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" />
    <link type="text/css" rel="stylesheet" href="css/index.css">
    <title>CodePen - Responstable 2.0: a responsive table solution</title>

    <script>
        window.console = window.console || function(t) {};
    </script>



    <script>
        if (document.location.search.match(/type=embed/gi)) {
            window.parent.postMessage("resize", "*");
        }
    </script>


</head>

<body translate="no" >

<h1><span>Categoryis</span></h1>

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
        <th>Update</th>
        <th>Delete</th>
    </tr>
    <?php foreach ($categories as $category) :?>
    <tr>
        <td><?php echo $category['id']?></td>
        <td><?php echo $category['name']?></td>
        <td><a href="layout/update.php?id=<?php echo $category['id']?>">Update</a></td>
        <td><a href="layout/delete.php?id=<?php echo $category['id']?>">Delete</a></td>

    </tr>
    <?php endforeach;?>
</table>

<script src='//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js'></script>





</body>

</html>
