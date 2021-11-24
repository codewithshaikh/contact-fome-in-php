<?php
session_start();


?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Succssfully</title>
  <?php include 'link.php' ?>

</head>
<body>
  <div class="container center-div shadow">

      <h1> Thank you for Submit <?php echo $_SESSION['fname'] ?> Happy Journey </h1>

      <a href="index.html">Feedback</a>

      </div>


</body>
</html>