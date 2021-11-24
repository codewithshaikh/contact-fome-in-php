<?php

$con = mysqli_connect('localhost', 'root', '','cyra' );


if (isset($_POST['submit'])){

    $name=$_POST['name'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];               
    $sms=$_POST['sms'];

$qy = "INSERT INTO `code` (`name`, `age`, `gender`, `email`, `phone`, `sms`) value ('$name' , '$age' , '$gender' , '$email' , '$phone' , '$sms')";

  $run = mysqli_query($con,$qy);

    if($run==TRUE){

        echo "<script>
               alert(' Data is Successfully submited');
                window.location.href='index.php';
             </script>";
    }else{

        echo "error";
    }
 }

 ?>