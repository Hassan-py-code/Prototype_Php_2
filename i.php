


<?php   
   

        
    //    if(isset($_COOKIE["cookie_color"])){
          
    //    }
  

  if($_SERVER["REQUEST_METHOD"] === "POST"){
        
        // declare 3 variable
        $f_name = trim($_POST["f_name"] ?? "");
        $b_color = $_POST["bg_color"] ?? "#fffff";
        $langauge = $_POST["option"] ?? "en";
        

        // Add cookie each name variable to declare
        setcookie("cookie_user", $f_name , time() + 3600);
        setcookie("cookie_color" , $b_color , time() + 3600);
        setcookie("cookie_lang" , $langauge , time() + 3600);

        
    //   switch ($langauge){

    //       case "Francais" :
    //          $text="Bienvenue bv";
    //         break;

    //       case "English":
    //            $text ="welcomme Mr";
    //         break;
           
    //   }
        
        //  header("location:" . $_SERVER["REQUEST_URI"]);
        header("location: i.php");
        exit();
        
        // header("location: i.php");
        // exit();
  }


    $f_name = $_COOKIE["cookie_user"] ?? "Said";
    $b_color = $_COOKIE["cookie_color"] ?? "#fffff";
    $langauge = $_COOKIE["cookie_lang"] ?? "en";



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color:  <?php  echo $_COOKIE["cookie_color"] ?>;">



    <div>
         

        
     <h1> <?php  $f_name ?> </h1>

    <form action="" method="post">
        <input type="text" name="f_name">
        <input type="color" name="bg_color">

         <select name="option" >
            <option value="Francais">Français</option>
            <option value="English">English</option>
         </select>

         <input type="submit" name="save_your" value="Save">
         <a href="#">Rest All</a>
         
    </form>




    </div>
    
</body>
</html>





<!-- 
//   echo "<style> body { background-color: " . $_COOKIE["cookie_color"]
//               . "} <style>";

// ?> -->