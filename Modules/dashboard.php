<?php
session_start();
require '../Tamplates/header.php';


 ?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="../Tamplates/img.css">
<head>
	<title>HOME</title>
</head>
<body>
  <div class="row">
  <div class="column">
  <a href="mats.php">  <img src="../public/mats.png" alt="mats" style="width:100%" ></a>
  </div>
  <div class="column">
  <a href="fort.php">  <img src="../public/forniture.jpg" alt="fort" style="width:100%"></a>
  </div>
  <div class="column">
  <a href="book.php"><img src="../public/book.png" alt="books" style="width:100%" ></a>
  </div>
</div>

</body>
</html>

<?php
require '../Tamplates/footer.php';
 ?>
