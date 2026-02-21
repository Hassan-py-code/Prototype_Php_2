

<?php   

   session_start();

   $Error="";

      // Handel form
   if($_SERVER["REQUEST_METHOD"] === "POST"){
       
      // declare 2 Variable
      $userName = $_POST["username"];
      $password = $_POST["password"];
       
      if($userName === "user" && $password === "123"){

         $_SESSION["Username"] = $userName;

         header("location: profile.php");
         exit();

      }else{
          $Error = "Your Name and Password is not correct";
      }
       
   }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- link css -->
     <link rel="stylesheet" href="style.css">
</head>
<body>
     
    <div>
         <h2>Login page</h2>

    <form action="" method="post">

        <label>Username:</label> <br>
        <input type="text" name="username" required><br><br>

        <label>Password:</label>
        <input type="password" name="password" required><br><br>

        <input type="submit" value="Login">

    </form>

    <p class="er"> <?php  echo $Error ?></p>
    </div>

</body>
</html>