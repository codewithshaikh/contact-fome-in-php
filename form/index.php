  <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
  
     <link rel="stylesheet" href="style.css">



</head>
<body>


    <img class="bg" src="bg.jpg" alt="IIT Kharagpur">
    <div class="container">
        <h1>Check Your Loan Eligibility</h3>
        <p>Enter your details and submit this form to confirm your participation in the trip </p>

       <!--  <?php 
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining us for the US trip</p>";
        }
    ?> -->
    
        <form action="form.php" method="POST">
            <input type="text" name="name" id="name" placeholder="Enter your name" required>
            <input type="text" name="age" id="age" placeholder="Enter your Age" required>
            <input type="text" name="gender" id="gender" placeholder="Enter your gender" required>
            <input type="emai" name="email" id="email" placeholder="Enter your email" required>
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone" required>
            <textarea name="sms" id="desc" cols="30" rows="10" placeholder="Enter any other information here" ></textarea>
            <button class="btn" name="submit">Submit</button> 
        </form>
    </div>
    
</body>
</html>