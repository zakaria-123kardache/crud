<?php
include("./connexion.php");
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
    <input type="text" id="fname" name="name"><br>

    <label for="prenom">prenom:</label><br>
    <input type="text" name="prenom"><br><br>

    <label for="prenom">photo:</label><br>
    <input type="file" name="photo"><br><br>

    <label for="date">DATE:</label>
    <input type="date" name="date"><br><br>

    <label for="date">Grad</label>
    <input type="number" id="price"
      name="price" min="0"
      max="1000" step="0.01" /><br><br>

    <input type="submit" value="Submit">
  </form>



</body>

</html>