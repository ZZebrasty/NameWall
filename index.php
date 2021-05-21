 <?php
 
    session_start();
     
    if (!isset($_SESSION['zalogowany']))
    {
        header('Location: index.php');
        exit();
    }
     
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <title>NameWall</title>
  <meta charset="UTF-8">
     <meta name="description" content="NameWall" />
    <meta name="keywords" content="NameWall" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
</head>
   <style>
  body {background-color: powderblue;}
  h1 {color: red;}
  p {color: blue;}
</style> 
 <?php
 
    $host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "namewall";
 
?>
<body>
 <?php

     echo "<p>Witaj ".$_SESSION['user'].'! [ <a href="logout.php">Wyloguj się!</a> ]</p>
 
 ?>

TEST TEST

</body>
</html> 
