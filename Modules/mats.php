<?php
require 'connection.php';
require '../Tamplates/header.php';
session_start();
if (!$_SESSION["user"]) {
    redirect_to_login();
    die;
}
$sql = "SELECT N, Nom, quantity FROM material";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  echo "<table style='border: solid 1px black;'>";
  echo "<tr><th>N°</th><th>NOM D'ARTICLE</th><th>quantity</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td style='width:150px;border:1px solid black;'>".$row["N"]."</td><td style='width:150px;border:1px solid black;'>".$row["Nom"]."</td><td style='width:150px;border:1px solid black;'>".$row["quantity"]."</td> <td style='width:150px;border:1px solid black;'></td></tr>";
  }
  echo "</table>";
echo '<a href="add.php"><button type="button" name="button">ajoute</button></a>';
echo '<a href="modifier.php"><button type="button" name="button">modifier</button></a>';
echo '<a href="supprime.php"><button type="button" name="button">supprimer</button></a>';
} else {
  echo "0 results";
}
$con->close();

 ?>
