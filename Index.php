<?php 
if(isset($_POST['search'])){

$search= strtolower($_POST['search']);


if($search=="africa"){
  header("Location:Africa.php");
}elseif( $search=="ghana"){
  header("Location:GH.php");
}elseif( $search=="louvre museum" or $search=="louvre"){
header("Location:Index.php#iterm1");

}elseif( $search=="great wall" or $search=="great wall of china"){
  header("Location:Index.php#iterm2");
}


elseif( $search=="colosseum"){
  header("Location:Index.php#iterm3");
}
elseif( $search=="eiffel tower" or $search=="eiffel" or $search=="tower"){
  header("Location:Index.php#iterm4");
}
elseif( $search=="sydney" or $search=="sydney opera house" or $search=="opera house"){
  header("Location:Index.php#iterm6");
}
elseif( $search=="navy pier" or $search=="pier" or $search=="navy"){
  header("Location:Index.php#iterm7");
}
elseif( $search=="palace of versailles" or $search=="versailles" ){
  header("Location:Index.php#iterm8");
}
elseif( $search=="forbidden city" or $search=="forbidden"){
  header("Location:Index.php#iterm9");
}

           //africa


elseif( $search=="victoria falls" or $search=="victoria"){
  header("Location:Africa.php#iterm2");
}
elseif( $search=="giza necropolis" or $search=="giza" or $search=="nercropolis"){
  header("Location:Africa.php#iterm1");
}
elseif( $search==" amphitheater of el jem" or $search=="ampitheater" or $search=="el jem"){
  header("Location:Africa.php#iterm3");
}
elseif($search=="devil's pool" or $search=="devil" or $search=="pool"){
  header("Location:Africa.php#iterm4");
}
elseif( $search=="mount kilimanjaro" or $search=="kilimanjaro" ){
  header("Location:Africa.php#iterm6");
}
elseif( $search=="volcanoes national park" or $search=="volcanoes national" or $search=="volcanoes"){
  header("Location:Africa.php#iterm7");
}
elseif( $search=="anse source d'argent" or $search=="versailles" ){
  header("Location:Africa.php#iterm8");
}
elseif( $search=="egyptian museum" or $search=="egyptian"){
  header("Location:Africa.php#iterm9");
}


/// ------gh---------

elseif( $search=="kakum national park" or $search=="kakum national" or $search=="kakum"){
  header("Location:GH.php#iterm2");
}
elseif( $search=="mole national park"){
  header("Location:Gh.php#iterm1");
}
elseif( $search=="st. george’s castle" or $search=="st. george" or $search=="elmina castle"){
  header("Location:Gh.php#iterm3");
}
elseif( $search=="nzulezu"){
  header("Location:Gh.php#iterm4");
}
elseif( $search=="paga"){
  header("Location:Gh.php#iterm6");
}
elseif( $search=="larabanga"){
  header("Location:Gh.php#iterm7");
}
elseif( $search=="kwame nkrumah mausoleum" or $search=="nkrumah" ){
  header("Location:Gh.php#iterm8");
  exit;
}elseif($search=="cape coast castle" or $search=="cape coast"){
  header("Location:Gh.php#iterm9");
  exit;
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
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
      <nav>
          <div class="whk">
          <input type="checkbox" id="check">
          <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
          </label>
          <label><img class="logo" src="image/1-removebg-preview.png" alt=""></label>
          <ul>
            <li><a class="active" href="Index.php">Home</a></li>
            <li><a href="About.php">About</a></li>
            <li><a href="booking.php">Book</a></li>
            <li><a href="local.php">Post</a></li>
          </ul>
      </div>
        </nav>
        <form method="post" class="banner">
          <input type="text" name="search" class="search" placeholder="Search Here" >
          <input type="submit" value="search" class="search_btn">
         
          </form>
          
        </div>
        
        
        <header><h1 class="sites">SOME POPULAR TOURIST SITES IN THE WORLD</h1></header>
      <main>
        
        <section class="container">
        
          <section class="kk">
        <div class="iterm1" id="iterm1" >
          <h1>Louvre Museum</h1>
         <button><a href="comment/submit comment.php"> Comment🌍🗺️</a></button>
         <button class="button1"><a href="booking.php"> Book Now </a></button>
        </div>
          
         <details>
          <Summary><h>Museum Lorem <em>Read More</em></h1> </Summary>
          <div class="sum-content" >
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta velit sequi omnis inventore non, distinctio nisi quod quis corporis. Inventore odio quo dolor minus quis quod necessitatibus illum voluptates perspiciatis.<br /><br/>
              Repellendus, quidem beatae. Esse totam quis soluta voluptates molestias obcaecati neque vitae perspiciatis pariatur, natus maiores culpa dolor odio aut voluptate quae tenetur dolore necessitatibus recusandae! Repudiandae animi eaque ab.
              Veritatis quos, enim quas quis perferendis aperiam saepe! Magnam quam nisi nihil quidem quisquam! Ducimus debitis corporis magnam, minus tempora temporibus aut architecto obcaecati adipisci deleniti dolor quis hic nam? <br/><br/>
              Consectetur eaque unde iste aut itaque cupiditate, quia doloremque, ex fugiat cum recusandae saepe cumque ea sit accusantium doloribus velit, ab tempore? Totam eligendi cumque magni nemo rem, recusandae optio!
              .</p>
          </div>
         </details>
        </section>
        <section class="kk">
        <div class="iterm2" id="iterm2" >
        <h1>Greate Wall OF Chain</h1>
        <button>Explore🌍🗺️</button>
        <button class="button1"><a href="booking.php"> Book Now </a></button>
        </div>
        <details>
          <Summary><h>Greate Wall OF Chain <em>Read More</em></h1> </Summary>
          <div class="sum-content" >
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta velit sequi omnis inventore non, distinctio nisi quod quis corporis. Inventore odio quo dolor minus quis quod necessitatibus illum voluptates perspiciatis.<br /><br/>
              Repellendus, quidem beatae. Esse totam quis soluta voluptates molestias obcaecati neque vitae perspiciatis pariatur, natus maiores culpa dolor odio aut voluptate quae tenetur dolore necessitatibus recusandae! Repudiandae animi eaque ab.
              Veritatis quos, enim quas quis perferendis aperiam saepe! Magnam quam nisi nihil quidem quisquam! Ducimus debitis corporis magnam, minus tempora temporibus aut architecto obcaecati adipisci deleniti dolor quis hic nam? <br/><br/>
              Consectetur eaque unde iste aut itaque cupiditate, quia doloremque, ex fugiat cum recusandae saepe cumque ea sit accusantium doloribus velit, ab tempore? Totam eligendi cumque magni nemo rem, recusandae optio!
              .</p>
          </div>
         </details>
  
      </section>
      <section class="kk">
        <div class="iterm3" id="iterm3">
        <h1> Colosseum</h1>
         <button><a href="/comment/submit comment.php"> Comment💬💬 </a></button>
         <button class="button1"><a href="booking.php"> Book Now </a></button>
        </div>
        <details>
          <Summary><h>Colosseum <em>Read More</em></h1> </Summary>
          <div class="sum-content" >
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta velit sequi omnis inventore non, distinctio nisi quod quis corporis. Inventore odio quo dolor minus quis quod necessitatibus illum voluptates perspiciatis.<br /><br/>
              Repellendus, quidem beatae. Esse totam quis soluta voluptates molestias obcaecati neque vitae perspiciatis pariatur, natus maiores culpa dolor odio aut voluptate quae tenetur dolore necessitatibus recusandae! Repudiandae animi eaque ab.
              Veritatis quos, enim quas quis perferendis aperiam saepe! Magnam quam nisi nihil quidem quisquam! Ducimus debitis corporis magnam, minus tempora temporibus aut architecto obcaecati adipisci deleniti dolor quis hic nam? <br/><br/>
              Consectetur eaque unde iste aut itaque cupiditate, quia doloremque, ex fugiat cum recusandae saepe cumque ea sit accusantium doloribus velit, ab tempore? Totam eligendi cumque magni nemo rem, recusandae optio!
              .</p>
          </div>
         </details>
 
      </section>
        <section class="kk">
        <div class="iterm4" id="iterm4">
        <h1>Eiffel Tower</h1>
         <button>Explore🌍🗺️</button>
         <button class="button1"><a href="booking.php"> Book Now </a></button>
        </div>
        <details>
          <Summary><h>Eiffel Tower <em>Read More</em></h1> </Summary>
          <div class="sum-content" >
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta velit sequi omnis inventore non, distinctio nisi quod quis corporis. Inventore odio quo dolor minus quis quod necessitatibus illum voluptates perspiciatis.<br /><br/>
              Repellendus, quidem beatae. Esse totam quis soluta voluptates molestias obcaecati neque vitae perspiciatis pariatur, natus maiores culpa dolor odio aut voluptate quae tenetur dolore necessitatibus recusandae! Repudiandae animi eaque ab.
              Veritatis quos, enim quas quis perferendis aperiam saepe! Magnam quam nisi nihil quidem quisquam! Ducimus debitis corporis magnam, minus tempora temporibus aut architecto obcaecati adipisci deleniti dolor quis hic nam? <br/><br/>
              Consectetur eaque unde iste aut itaque cupiditate, quia doloremque, ex fugiat cum recusandae saepe cumque ea sit accusantium doloribus velit, ab tempore? Totam eligendi cumque magni nemo rem, recusandae optio!
              .</p>
          </div>
         </details>
 
        
      </section>

        

        <section class="container">
        
          <section class="kk">
        <div class="iterm6" id="iterm6">
        <h1>Sydney Opera House</h1>
         <button>Explore🌍🗺️</button>
         <button class="button1"><a href="booking.php"> Book Now </a></button>
        </div>
          
        <details>
          <Summary><h>Sydney Opera House <em>Read More</em></h1> </Summary>
          <div class="sum-content" >
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta velit sequi omnis inventore non, distinctio nisi quod quis corporis. Inventore odio quo dolor minus quis quod necessitatibus illum voluptates perspiciatis.<br /><br/>
              Repellendus, quidem beatae. Esse totam quis soluta voluptates molestias obcaecati neque vitae perspiciatis pariatur, natus maiores culpa dolor odio aut voluptate quae tenetur dolore necessitatibus recusandae! Repudiandae animi eaque ab.
              Veritatis quos, enim quas quis perferendis aperiam saepe! Magnam quam nisi nihil quidem quisquam! Ducimus debitis corporis magnam, minus tempora temporibus aut architecto obcaecati adipisci deleniti dolor quis hic nam? <br/><br/>
              Consectetur eaque unde iste aut itaque cupiditate, quia doloremque, ex fugiat cum recusandae saepe cumque ea sit accusantium doloribus velit, ab tempore? Totam eligendi cumque magni nemo rem, recusandae optio!
              .</p>
          </div>
         </details>
        </section>
        <section class="kk">
        <div class="iterm7"id="iterm7">
        <h1>Navy Pier</h1>
         <button>Explore🌍🗺️</button>
         <button class="button1"><a href="booking.php"> Book Now </a></button>
        </div>


        <details>
          <Summary><h>Navy Pier <em>Read More</em></h1> </Summary>
          <div class="sum-content" >
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta velit sequi omnis inventore non, distinctio nisi quod quis corporis. Inventore odio quo dolor minus quis quod necessitatibus illum voluptates perspiciatis.<br /><br/>
              Repellendus, quidem beatae. Esse totam quis soluta voluptates molestias obcaecati neque vitae perspiciatis pariatur, natus maiores culpa dolor odio aut voluptate quae tenetur dolore necessitatibus recusandae! Repudiandae animi eaque ab.
              Veritatis quos, enim quas quis perferendis aperiam saepe! Magnam quam nisi nihil quidem quisquam! Ducimus debitis corporis magnam, minus tempora temporibus aut architecto obcaecati adipisci deleniti dolor quis hic nam? <br/><br/>
              Consectetur eaque unde iste aut itaque cupiditate, quia doloremque, ex fugiat cum recusandae saepe cumque ea sit accusantium doloribus velit, ab tempore? Totam eligendi cumque magni nemo rem, recusandae optio!
              .</p>
          </div>
         </details>
      </section>
      <section class="kk">
        <div class="iterm8" id="iterm8">
        <h1> Palace of Versailles</h1>
         <button>Explore🌍🗺️</button>
         <button class="button1"><a href="booking.php"> Book Now </a></button>
        </div>
        
        <details>
          <Summary><h> Palace of Versailles <em>Read More</em></h1> </Summary>
          <div class="sum-content" >
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta velit sequi omnis inventore non, distinctio nisi quod quis corporis. Inventore odio quo dolor minus quis quod necessitatibus illum voluptates perspiciatis.<br /><br/>
              Repellendus, quidem beatae. Esse totam quis soluta voluptates molestias obcaecati neque vitae perspiciatis pariatur, natus maiores culpa dolor odio aut voluptate quae tenetur dolore necessitatibus recusandae! Repudiandae animi eaque ab.
              Veritatis quos, enim quas quis perferendis aperiam saepe! Magnam quam nisi nihil quidem quisquam! Ducimus debitis corporis magnam, minus tempora temporibus aut architecto obcaecati adipisci deleniti dolor quis hic nam? <br/><br/>
              Consectetur eaque unde iste aut itaque cupiditate, quia doloremque, ex fugiat cum recusandae saepe cumque ea sit accusantium doloribus velit, ab tempore? Totam eligendi cumque magni nemo rem, recusandae optio!
              .</p>
          </div>
         </details>
      </section>
        <section class="kk">
        <div class="iterm9" id="iterm9">
        <h1>Forbidden City</h1>
         <button>Explore🌍🗺️</button>
         <button class="button1"><a href="booking.php"> Book Now </a></button>
        </div>
        
        <details>
          <Summary><h>Forbidden City <em>Read More</em></h1> </Summary>
          <div class="sum-content" >
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta velit sequi omnis inventore non, distinctio nisi quod quis corporis. Inventore odio quo dolor minus quis quod necessitatibus illum voluptates perspiciatis.<br /><br/>
              Repellendus, quidem beatae. Esse totam quis soluta voluptates molestias obcaecati neque vitae perspiciatis pariatur, natus maiores culpa dolor odio aut voluptate quae tenetur dolore necessitatibus recusandae! Repudiandae animi eaque ab.
              Veritatis quos, enim quas quis perferendis aperiam saepe! Magnam quam nisi nihil quidem quisquam! Ducimus debitis corporis magnam, minus tempora temporibus aut architecto obcaecati adipisci deleniti dolor quis hic nam? <br/><br/>
              Consectetur eaque unde iste aut itaque cupiditate, quia doloremque, ex fugiat cum recusandae saepe cumque ea sit accusantium doloribus velit, ab tempore? Totam eligendi cumque magni nemo rem, recusandae optio!
              .</p>
          </div>
         </details>
  </section>
        
      
            
        </section>

      </main>

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