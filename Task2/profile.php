


<?php  

   session_start();

   if(empty($_SESSION["Username"])){

       header("location: deconnexion.php");
       exit();

   }
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My profile</title>
</head>
<body>
    
     <h2>Welcome <?php   echo $_SESSION["Username"]; ?></h2>
     
     <a href="deconnexion.php">Logout</a>

</body>
</html>