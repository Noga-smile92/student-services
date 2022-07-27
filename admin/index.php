<?php
include_once ('config.php');
include_once ('insert.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri&family=Cairo:wght@200&family=Poppins:wght@100;200;300&family=Tajawal:wght@300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students services | خدمات للطلبة</title>
    <link rel="stylesheet"  href="ind.css">
</head>
<body>
    <center>
        <div class="main">
            <form action=" " method="post" class="form" enctype="multipart/form-data">
                <h2>Student Services Portal</h2>
                <img src="images/online-tutoring.jpg" alt="logo" width="350px"> <br>
                
                <input type="text" name='name' placeholder='service name'>
                          
                <input type="text" name='price'  placeholder='Price'>
              <br>
                <input type="file" id="file" name='image' style='display:none;' >
                <label for="file">  Service image </label>
                <button name='upload'> import a service ✅</button>
                <br>
                <a href="products.php">show all services</a>
            </form>
        </div>
    </center>
</body>
</html>