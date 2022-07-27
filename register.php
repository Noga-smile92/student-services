
<?php
include_once ('C:\wamp64\www\student services\config\app.php');
include_once ('codeauthenication.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <style>
      input{
         text-align: center;
      }
   </style>
</head>
<body> 
<div class="form-container">
   <form action=" " method="post">
   <?php include 'message.php'; ?>
      <h3>New user an account</h3>
      <input type="text" name="name" required placeholder="User name" class="box">
      <input type="text" name="email" required placeholder="Email" class="box">
      <input type="password" name="password" required placeholder="Password" class="box">
      <input type="password" name="cpassword" required placeholder="Confirm password" class="box">
      <input type="submit" name="submit" class="btn" value="submit">
      <p>Have already an account? <a href="login2.php"> login</a></p>
   </form>

</div>

</body>
</html>
