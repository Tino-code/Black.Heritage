<?php
 include('comment/configs/db_configs.php');

 if (isset($_POST['submit'])){


$username= mysqli_real_escape_string($conn,$_POST['name']);
$useremail= mysqli_real_escape_string($conn,$_POST['email']);


$sql="INSERT INTO emefaContact(namesP,email) VALUES ('$username','$useremail')";

if(mysqli_query($conn,$sql)){
}
else{
     echo"query error" .mysqli_error($conn);
} 



 }





?>



<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Black Herritage</title>
      <link rel="apple-touch-icon" sizes="180x180" href="image/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="image/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="image/favicon-16x16.png">
  <link rel="manifest" href="image/site.webmanifest">
  <link rel="stylesheet" href="css/about.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
  <body > 
      <nav>
          <div class="whk">
          <input type="checkbox" id="check">
          <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
          </label>
          <label><img class="logo" src="image/1-removebg-preview.png" alt=""></label>
          <ul>
            <li><a href="Index.php">Home</a></li>
            <li><a href="About.php">About</a></li>
            <li><a href="booking.php">book</a></li>
          </ul>
      </div>
      </nav>
        <div class="banner">
        <header><h1>Our Mission</h1></header>
          </div>
          <section class="box">
          <div class="container">
            <p><strong>
              Welcome to Black-Heritage, your passport to unforgettable adventures! At Black-Heritage, we're not just a tourism site; we're your personal guides to explore the world's hidden gems. Whether you're craving the tranquility of remote beaches, the thrill of bustling city streets, or the serenity of majestic mountains, Black-Heritage has curated the perfect itinerary for you. Our innovative platform seamlessly connects travelers with unique experiences tailored to their preferences, ensuring every journey is as extraordinary as the destination itself. Join us on a journey of discovery and let Black-Heritage redefine the places you visit and the way you travel."
              </strong>
            </p>
          </div>

          

        </section>

        <h1 class="team">Team Members</h1>
        
        
          <center><table>
            <tr>
            <th>Martin</th>
            <th>Courage</th>
            <th>Perpetual</th>
            <th>Brown</th>   
          </tr>
         <tr>
            <td><img width="200px" height="300px" src="image/Screenshot_20240220-192145_1_-removebg-preview.png" alt=""></td>
            <td><img width="200px" height="300px" src="image/IMG-20240220-WA0002-removebg-preview.png" alt=""></td>
            <td><img width="200px" height="300px" src="image/IMG-20240220-WA0001-removebg-preview.png" alt=""></td>
            <td><img width="200px" height="300px" src="image/IMG-20240220-WA0014-removebg-preview.png" alt=""></td>
          
            
          </tr>
          </table></center>

          <form class="" action="About.php" method="post" >
            <h1 class="contact">Contact Us</h1>
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name" placeholder="name" required><br>
                <label for="name">E-mail:</label>
                <input type="email" id="email" name="email" placeholder="e-mail" required><br>
                <input class="submit" name="submit" type="submit" value="Submit">
    
        </form>

          <footer>
            <h4>follow us on</h4>
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-github"></i>
            <i class="fa-brands fa-linkedin"></i>
            <div  class="copy_right">Copyright &copy; 2023 Black-Heritage</div>
          </footer>
        
  </body>

  </html>
  
