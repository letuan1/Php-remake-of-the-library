<?php

require "../database/DatabaseCategories.php";

if (isset($_POST['name'])){
    $name = $_POST['name'];
    $categori = new DatabaseCategori();
    $insert = $categori->insert($name);
    header("Location: ../index.php");}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact V4</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../css/from_add.css">
    <!--===============================================================================================-->
</head>
<body>


<div class="container-contact100">
    <div class="wrap-contact100">
        <form class="contact100-form validate-form" method="post">
				<span class="contact100-form-title">
					Add one element to the categroes table
				</span>

            <div class="wrap-input100 validate-input" data-validate="Name is required">
                <span class="label-input100">Your Name</span>
                <input class="input100" type="text" name="name" placeholder="Enter your name">
                <span class="focus-input100"></span>
            </div>

            <div class="container-contact100-form-btn">
                <div class="wrap-contact100-form-btn">
                    <div class="contact100-form-bgbtn"></div>
                    <button class="contact100-form-btn">
							<span>
								Submit
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

</body>
</html>
