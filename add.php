<?php
include("./connexion.php");

  $name = $Prenom = $grade = $date = $photo = "";

 if ( $_SERVER["REQUEST_METHOD"] == "post")
 {
  $input_name = ($_POST["name"]);
  $input_Prenom = ($_POST["prenom"]);
  $input_date = ($_POST["date"]);
  $input_grade = ($_POST["grade"]);
  $input_photo = ($_POST["photo"]);

  

 }
//  if 
//  ( $_SERVER["REQUEST_METHOD"] == "post")
//  {
//   $input_Prenom = ($_POST["prenom"]);
//  }

//  if ( $_SERVER["REQUEST_METHOD"] == "post")
//  {
//   $input_date = ($_POST["date"]);
//  }

//  if ( $_SERVER["REQUEST_METHOD"] == "post")
//  {
//   $input_grade = ($_POST["grade"]);
//  }
 
//  if ( $_SERVER["REQUEST_METHOD"] == "post"){
//   $input_photo = ($_POST["photo"]);

//  }


?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Creat New student</title>
</head>

<body>
  <H2>CReat New student</H2>
  <form method="post">

    <label for="name"> name:</label><br>
    <input type="text"  name="name"><br>

    <label for="prenom">prenom:</label><br>
    <input type="text" name="prenom"><br><br>

    <label for="prenom">photo:</label><br>
    <input type="file" name="photo"><br><br>

    <label for="date">DATE:</label>
    <input type="date" name="date"><br><br>

    <label for="date">Grad</label>
    <input type="number" i
      name="date" min="0"
      max="1000" step="0.10" /><br><br>

    <input type="submit" value="Submit">
  </form>



</body>

</html>