<?php
require "../database/DatabaseCategories.php";
$categori = new DatabaseCategori();
if (isset($_GET['id'])){
    $id = $_GET['id'];
}
$table = "categories";
$byId = $categori->getById($table, $id);
if ($byId) {
    if (isset($_POST['username'])) {
        $name = $_POST['username'];
        $update = $categori->update($name, $id);
        header("Location: ../index.php");
    }
}else{
    echo "không tìm thấy phần mà bạn muốn sửa này";

}
?>

<!DOCTYPE html>
<html lang="en" >

<head>

    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/x-icon" href="https://static.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" />
    <link rel="mask-icon" type="" href="https://static.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" />
    <link rel="stylesheet" type="text/css" href="../css/from_update.css">
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
            <input type="text" name="username" value="<?php echo $byId['name']?>"/>
        </p>
        <input type="submit" value=" Update Name" />

    </form>

    <form action="../index.php">
        <h1>nhấn vào đây để thoát</h1>
        <button class="button button3">Red</button>
    </form>
</div>
</body>

</html>
<?php
2
require "../database/DatabaseCategories.php";
3
$categori = new DatabaseCategori();
4
if (isset($_GET['id'])){
5
    $id = $_GET['id'];
6
}
7
$table = "categories";
8
$byId = $categori->getById($table, $id);
9
if ($byId) {
10
    if (isset($_POST['username'])) {
11
        $name = $_POST['username'];
12
        $update = $categori->update($name, $id);
13
        header("Location: ../index.php");
14
    }
15
}else{
16
    echo "không có phần tử này";
17
}
18
?>
19
​
20
<!DOCTYPE html>
21
<html lang="en" >
22
​
23
<head>
24
​
25
    <meta charset="UTF-8">
26
    <link rel="shortcut icon" type="image/x-icon" href="https://static.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" />
27
    <link rel="mask-icon" type="" href="https://static.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" />
28
    <link rel="stylesheet" type="text/css" href="../css/from_update.css">
29
    <title>CodePen - CSS3 Contact Form</title>
30
​
31
    <script>
32
        window.console = window.console || function(t) {};
33
    </script>
34
​
35
​
36
​
37
    <script>
38
        if (document.location.search.match(/type=embed/gi)) {
39
            window.parent.postMessage("resize", "*");
40
        }
41
    </script>
42
​
43
​
44
</head>
45
​
46
<body translate="no" >
47
​
48
<link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet' type='text/css'>
49
<link href="https://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">
