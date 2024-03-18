<?php
 include('comment/configs/db_configs.php');
 $thanks;

 if (isset($_POST['submit'])){

$useremail= $_POST['email'];


$sql="INSERT INTO newsletter(email) VALUES ('$useremail')";

if(mysqli_query($conn,$sql)){
    $thanks="Thanks for Subscribeing to our newsletter";
}
else{
     echo"query error" .mysqli_error($conn);
} 



 }





?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Black-Herritage</title>
    <link rel="apple-touch-icon" sizes="180x180" href="image/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="image/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="image/favicon-16x16.png">
    <link rel="manifest" href="image/site.webmanifest">
    <link rel="stylesheet" href="css/newsletter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://kit.fontawesome.com/a1b5dfb058.js" crossorigin="anonymous"></script>
</head>
<body>
    <main>
    <div class="container">
    <form action="newsletter.PHP" method="post" >
        <h1 class="Heading">Join Our Newsletter</h1>
        <p>Subscribe to our newsletter via email to receive any update on our website. We will also inform you as to whether there are available flights with affordable prices to enable you bring your dreams to life.</p>
        <div class="email-box">
            <i class="fa-solid fa-envelope"></i>
            <input type="email" class="tbox" type="email" name="email" value="" placeholder="Enter your email">
            <input class="btn" type="submit" name="submit" value="Subscribe">
        </div>
        <?php
       if (isset($_POST['submit'])){

          echo "<h1 style=' color:blue; font-size: 1.5rem;'>$thanks</h1>" ;
       }
        ?>
    

    </form>
    </div>
    </main>
    
</body>
</html>