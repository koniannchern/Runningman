<?php

session_start();
include("config/db.php");
include("functions.php");

$user_data = check_login($conn);

?>



<!DOCTYPE html>
<html>
<head>
  <title>
    購物車
  </title>
  <link rel="stylesheet" href="css/e-shop.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/paper.js/0.9.24/paper-full.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>
<body onload="render()">
     
    <?php if(isset($_SESSION['user_id'])): ?>
      <div class="background-img"></div>    
    <?php endif; ?>
    
	
    <div class="side-menu">
        <ul>
          <li id="home"><a href="index.php">Home</a></li>
          <li id="about"><a href="about.php">About</a></li>
          <li id="starring"><a href="starring.php">Starring</a></li>
          <li id="productjoin"><a href="multimedia.php">Multimedia</a></li>
          <li id="eshop"><a href="e-shop.php">E-shop</a></li>
          <li id="project"><a href="project.php">Project join</a></li>
        </ul>
        <div class="contact">
          <span class="contact-divide"></span>
          <p><i class="fas fa-mobile-alt"></i>0920275811</p>
          <p><i class="fas fa-phone-alt"></i>04-7256781</p>
          <p><i class="far fa-envelope"></i>runningman@gmail.com</p>
          <p>首爾市江南區三清洞三星路165號3樓</p>
        </div>
      </div>
      
      <!--navbar-->
      <div class="header-navbar">
       <div class="navbar-wrapper">
         <!--漢堡選單icon-->
         <div class="menu-btn">
           <div class="menu-btn_burger">
             <div class="menu-btn_burger1"></div>
             <div class="menu-btn_burger2"></div>
           </div>
         </div>
       
         <h1><a href="index.php">Running man</a></h1>
         <ul>
           <li>
           <?php if(isset($_SESSION['user_id'])): ?>
             <a href="login.php">LOGOUT</a>
          <?php else: ?>
            <a href="login.php">LOGIN</a>
          <?php endif; ?>
           </li>
           <li><a href="join.php">JOIN</a></li>
           <?php if(isset($_SESSION['user_id'])): ?>
		       <li><a href="user.php"><i class="fas fa-shopping-cart fa-lg" id="cart_n"></i></a></li>
           <?php endif; ?>
         </ul>
       </div>
     </div>
 
     <!--social-->
     <div class="social">
       <a href="https://www.facebook.com/runningmantaiwan"><i class="fab fa-facebook-f fa-2x"></i></a>
       <a href="https://www.instagram.com/sbs_runningman_sbs/?hl=zh-tw"><i class="fab fa-instagram fa-2x"></i></a>
       <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
       <a href="#"><i class="fas fa-envelope fa-2x"></i></a>
     </div>
     <!--e-shop-->
	   
     <?php if(isset($_SESSION['user_id'])): ?>

     <div class="container marketing">
      <h2>Running man人氣周邊商品</h2>
      <div class="row" id="productDIV">
        
      </div>
          
     </div>

     <?php else: ?>
       <div class="login-tell-img">
        <img class="login-tell" src="img/login-tell.png" alt="">
       </div>
      <?php endif; ?>

     
    
     <!--footer-->
     
     <div class="footer">
         <div class="footer-wrapper">
           <div class="footer-box1">
             <div class="footer-title">
               <h2>RUNNING MAN<span>런닝맨</span></h2>
             </div>
             <div class="footer-qa">
               <p>MON~FRI 13:00~20:00</p>
               <p>SAT.SUN.HOLIDAY OFF</p>
               <span>
                 <a href="#">退換貨說明</a>
                 <a href="#">常見問題</a>
               </span>
             </div>
             <div class="footer-copyright">
               <p>Email : runningman@gmail.com</p>
               <p>COPYRIGHT © KINGKONG by STARSHIP ENTERTAINMENT ALL RIGHTS RESERVED.</p>
             </div>
           </div>
           <div class="footer-box2">
              <div class="footer-info">
                <p>INFO</p>
                <a href="#">使用者條款</a>
                <a href="#">隱私權政策</a>
              </div>
              <div class="footer-shopping">
                <p>SHOPPING</p>
                <a href="#">付款方式</a>
                <a href="#">台灣配送</a>
              </div>
              <div class="footer-account">
                <p>ACCOUNT</p>
                <a href="#">會員中心</a>
              </div>
           </div>
         </div>
     </div>
     
     
	


	 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.29.2/dist/sweetalert2.all.min.js"></script>
	 <script src="js/e-shop.js"></script>
   
</body>
</html>
     
         
     
 
    

  
  
  
</body>
</html>