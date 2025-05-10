<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

    <!-- swipper css link  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- font awesome cdn link -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <!-- custom css file link -->
     <link rel="stylesheet" href="style.css">
</head>
<body>
  <!-- header section strats -->
  <section class="header">
  <a href="home.php" class="logo">travel.</a>

  <nav class="navbar">
  <a href="home.php" >home</a>
  <a href="about.php" >about</a>
  <a href="package.php" >package</a>
  <a href="book.php">book</a>
  </nav>
  
  <div id="menu-btn" class="fas fa-bars">
    
  </div>
 </section>


 <!-- header section end -->

  <div class="heading" style="background:url(bookimage/header-bg-3.png)no-repeat">
    <h1>book now</h1>
  </div>

  <!-- booking section starts  -->
  <section class="booking">

    <h1 class="heading-title">book your trip!</h1>

    <form action="book_form.php" method="post" class="book-form">

      <div class="flex">
        <div class="inputBox">
          <span>name:</span>
          <input type="text" placeholder="enter your name" name="name">
        </div>

        <div class="inputBox">
          <span>email:</span>
          <input type="email" placeholder="enter your email" name="email">
        </div>
         
        <div class="inputBox">
          <span>phone:</span>
          <input type="number" placeholder="enter your number" name="phone">
        </div>

        <div class="inputBox">
          <span>address:</span>
          <input type="text" placeholder="enter your adress" name="adress">
        </div>

        <div class="inputBox">
          <span>where to:</span>
          <input type="text" placeholder="place you want to visit" name="location">
        </div>

        <div class="inputBox">
          <span>how many:</span>
          <input type="number" placeholder="number of guests" name="guests">
        </div>

        <div class="inputBox">
          <span>arrival:</span>
          <input type="date"  name="arrival">
        </div>

        <div class="inputBox">
          <span>leaving:</span>
          <input type="date"  name="leaving">
        </div>
         
        <input type="submit" value="submit" class="btn" name="send">

      </div>
    </form>
    
  </section>

  <!-- booking section starts  -->

















  <!-- footer section start  -->
   

  <section class="footer">
     
  <div class="box-container">

    <div class="box">
     <h3>Quick link</h3>
    <a href="home.php" ><i class="fas fa-angle-right"></i>home</a>
    <a href="about.php" ><i class="fas fa-angle-right"></i>about</a>
    <a href="package.php" ><i class="fas fa-angle-right"></i>package</a>
    <a href="book.php"><i class="fas fa-angle-right"></i>book</a>

    </div>

    <div class="box">
    <h3>Extra link</h3>
    <a href="#" ><i class="fas fa-angle-right"></i>ask question</a>
    <a href="#" ><i class="fas fa-angle-right"></i>about us</a>
    <a href="#" ><i class="fas fa-angle-right"></i>privacy policy</a>
    <a href="#" ><i class="fas fa-angle-right"></i>terms of use</a>

    </div>

    <div class="box">
    <h3>contact info</h3>
    <a href="#" ><i class="fas fa-phone"></i>+9779827364</a>
    <a href="#" ><i class="fas fa-phone"></i>+97846836732</a>
    <a href="#" ><i class="fas fa-envelope"></i>sanju1811@gmail.com</a>
    <a href="#" ><i class="fas fa-map"></i>kathmandu, nepal-400104</a>
    </div>

    <div class="box">
      <h3>follow us</h3>
      <a href="#" ><i class="fab fa-facebook-f"></i>facebook</a>
      <a href="#" ><i class="fab fa-twitter"></i>twitter</a>
      <a href="#" ><i class="fab fa-instagram"></i>instagram</a>
      <a href="#" ><i class="fab fa-linkedin"></i>linkedin</a>
    </div>

  </div>

  <div class="credit">created by <span>Sanju Chaudhary</span>|all right reserved!</div>
  </section>


  <!-- footer section end  -->






    <!-- swiper js link  -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


    <!-- custom js file link -->
  <script src="script.js"></script>
    
</body>
</html>