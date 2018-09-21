<?php
require "../database/Book.php";
$categori = new Book();
if (isset($_GET['id'])){
    $id = $_GET['id'];
}
$table = "books";
$byId = $categori->getById($table, $id);
if ($byId) {
    if (isset($_POST['username'])) {
        $name = $_POST['username'];
        $update = $categori->update($name, $id);
        header("Location: ../index.php");
    }
}else{
    echo "không có phần tử này";
}
?>

<!DOCTYPE html>
<html lang="en" >

<head>

    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/x-icon" href="https://static.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" />
    <link rel="mask-icon" type="" href="https://static.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" />
    <link rel="stylesheet" type="text/css" href="../css/index.css">
    <title>CodePen - CSS3 Contact Form</title>

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

<link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet' type='text/css'>
<link href="https://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">
<div id="content">
    <h1>Contact</h1>

    <form action=" " method="post">
        <p>
            <input type="text" name="username" value="<?php echo $byId['name_books']?>"/>
        </p>
        <input type="submit" value=" Update Name" />

    </form>
</div>
</body>

</html>
