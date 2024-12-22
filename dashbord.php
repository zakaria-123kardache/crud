<?php
include("./connexion.php");

$sql = "SELECT * FROM donnes";
if ($result = mysqli_query($link, $sql)) {
  if (mysqli_num_rows($result) > 0) {
    echo " <table>";
    echo "<thead>";
    echo " <tr>";
    echo "<th>#</th>";
    echo "<th>Name</th>";
    echo "<th>prenom</th>";
    echo "<th>photo</th>";
    echo "<th>grad</th>";
    echo "<th>date</th>";
    echo "</tr>";
    echo "</thead>";
    echo " <tbody>";
    while ($row = mysqli_fetch_array($result)) {
      echo " <tr>";
      echo " <td>" . $row['id'] . "</td>";
      echo " <td>"  . $row['name'] . "</td>";
      echo "<td>" . $row['prenom'] . "</td>";
      echo "<td>" . $row['photo'] . "</td>";
      echo "<td>" . $row['grade'] . "</td>";
      echo "<td>" . $row['date'] . "</td>";

      echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";

    mysqli_free_result($result);
  } else {
    echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
  }
} else {
  echo "Oops! Something went wrong. Please try again later.";
}

// Close connection
mysqli_close($link);
?>