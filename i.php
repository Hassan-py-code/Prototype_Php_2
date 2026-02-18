

<?php   
   

    // declare 3 variable
    $f_name = trim($_POST["f_name"] ?? "said");
    $bg_color = $_POST["bg_color"] ?? "#fffff";
    $langauge = $_POST["option"] ?? "";
    

   if(isset($_POST["rest"])){

        setcookie("cookie_user", $f_name , time() - 3600);
        setcookie("cookie_color" , $bg_color , time() -  3600);
        setcookie("cookie_lang" , $langauge , time() - 3600);

        header("location:" . $_SERVER["REQUEST_URI"]);
        exit();
   }
   
 
  if( $_SERVER["REQUEST_METHOD"] === "POST"){
   
   if(isset($_POST["save_your"])){
        // Add cookie each name variable to declare
        setcookie("cookie_user", $f_name , time() + 3600);
        setcookie("cookie_color" , $bg_color , time() + 3600);
        setcookie("cookie_lang" , $langauge , time() + 3600);
        
    
        header("location:" . $_SERVER["REQUEST_URI"]);
        // header("location: i.php");
        exit();
    
   }

}

    $f_name = $_COOKIE["cookie_user"] ?? "said";
    $bg_color = $_COOKIE["cookie_color"] ?? "#ffffff";
    $langauge = $_COOKIE["cookie_lang"] ?? "";
    
    $text="";

    switch ($langauge){

          case "Francais" :
             $text="Bienvenue bv";
            break;

          case "English":
               $text ="welcomme Mr";
            break;
           
      }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>

<body style="background-color:  <?php  echo $bg_color ?>;">


    <div>
     <h1> <?php  echo $text .  $f_name ?> </h1>

    <form action="" method="post">

        <input type="text" name="f_name" value="<?php  echo $f_name ?>">
        <br>
        <br>

        <input type="color" name="bg_color" value="<?php  echo $bg_color ?>">
        <br>
        <br>

         <select name="option" >
             <option value="">SELECT</option>
            <option value="Francais">Français</option>
            <option value="English">English</option>
         </select>

         <br>
         <br>

         <input type="submit" name="save_your" value="Save">
         <br>
         <br>

         <!-- <a href="#">Rest All</a> -->
          <button type="submit" name="rest">Rest All</button>
         
    </form>

    </div>
    
</body>
</html>