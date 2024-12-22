<?php
include("./connexion.php");

  $name = $prenom = $grade = $date = $photo = "";

 if ( $_SERVER["REQUEST_METHOD"] == "POST")
 {
  $input_name = ($_POST["name"]);
  $input_Prenom = ($_POST["prenom"]);
  $input_date = ($_POST["date"]);
  $input_grade = ($_POST["grade"]);
  $input_photo = ($_POST["photo"]);

  $date_obj = DateTime::createFromFormat('Y-m-d', $input_date);

  $sql = "INSERT INTO donnes (name , prenom , photo , grade , date) VALUES (?,?,?,?,?);";

  $stmt = mysqli_prepare($link, $sql);
  mysqli_stmt_bind_param($stmt,"sssss",$input_name,$input_Prenom,$input_photo,$input_grade,$input_date);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
 
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
        

        mysqli_close($link);
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
  <form action="add.php" method="POST">

    <label for="name"> name:</label><br>
    <input type="text"  name="name"><br>

    <label for="prenom">prenom:</label><br>
    <input type="text" name="prenom"><br><br>

    <label for="photo">photo:</label><br>
    <input type="file" name="photo"><br><br>

    <label for="date">DATE:</label>
    <input type="date" name="date"><br><br>

    <label for="grade">grade</label>
    <input type="number" i
      name="grade" min="0"
      max="1000" step="0.10" /><br><br>

    <input type="submit" value="Submit">
  </form>



</body>

</html>