<?php

session_start();
include("config/db.php");
include("functions.php");

$user_data = check_login($conn);

?>


<!DOCTYPE html>
<html lang="zh-Hang-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Running man</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.9/fullpage.min.css" integrity="sha512-8M8By+q+SldLyFJbybaHoAPD6g07xyOcscIOQEypDzBS+sTde5d6mlK2ANIZPnSyxZUqJfCNuaIvjBUi8/RS0w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/all.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/paper.js/0.9.24/paper-full.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
  </head>
  <body>
    
     
     
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
     <!--黑屏-->
     
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

    <div id="fullPage">

      <div class="section s1">
       

        <!--輪播banner-->
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              
            </div>
            <div class="carousel-item">
              
            </div>
            <div class="carousel-item">
              
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      
      <!--關於running man-->
      <div class="section s2">
          <div class="program">
            <h2>Running man<span>런닝맨</span></h2>
            <span></span>
            <div class="program-info">
              <h3>INFORMATION</h3>
              <ul>
                <li><span>節目導演</span><span>崔寶弼(최보필)</span></li>
                <li><span>主持成員</span><span>劉在錫、池錫辰、金鍾國、哈哈、宋智孝、李光洙 、全昭旻 、梁世燦</span></li>
                <li><span>播映時間</span><span>每周日17:00</span></li>
              </ul>
            </div>

            <div class="program-product">
              <h3>PRODUCTION</h3>
              <ul>
                <li><span>製作公司</span><span>SBS綜藝本部</span></li>
                <li><span>播放期間</span><span>2010.7.11~</span></li>
                <li><span>播出地區</span><span>大韓民國</span></li>
              </ul>
            </div>

            <a href="about.php">MORE <i class="fas fa-plus"></i></a>
          </div>
      </div>
      
      <!--主持成員-->
      <div class="section s3">
        <div class="starring">
          <h2>STARRING<br><span>Running man主持群</span></h2>

          <div class="starring-profile">

            <div class="starring-card middle">
              <div class="front">
                 <img src="img/yu1.jpg" alt="">
              </div>
              <div class="back">
                  <div class="back-content middle">
                      <h2>Yoo Jae-Seok</h2>
                  </div>
              </div>
            </div>


            <div class="starring-card middle">
              <div class="front">
                  <img src="img/ji1.jpg" alt="">
              </div>
              <div class="back">
                  <div class="back-content middle">
                      <h2>Jee Seok-jin</h2>
                  </div>
              </div>
            </div>

            <div class="starring-card middle">
              <div class="front">
                  <img src="img/kim1.jpg" alt="">
              </div>
              <div class="back">
                  <div class="back-content middle">
                      <h2>Kim Jong-kook</h2>
                  </div>
              </div>
            </div>

            <div class="starring-card middle">
              <div class="front">
                  <img src="img/haha1.jpg" alt="">
              </div>
              <div class="back">
                  <div class="back-content middle">
                      <h2>Ha Dong-hoon</h2>
                  </div>
              </div>
            </div>

            <div class="starring-card middle">
              <div class="front">
                  <img src="img/song1.jpg" alt="">
              </div>
              <div class="back">
                  <div class="back-content middle">
                      <h2>Song Ji-hyo</h2>
                  </div>
              </div>
            </div>

            <div class="starring-card middle">
              <div class="front">
                  <img src="img/li1.jpg" alt="">
              </div>
              <div class="back">
                  <div class="back-content middle">
                      <h2> Lee Kwang-soo</h2>
                  </div>
              </div>
            </div>

            <div class="starring-card middle">
              <div class="front">
                  <img src="img/yang1.jpg" alt="">
              </div>
              <div class="back">
                  <div class="back-content middle">
                      <h2>Yang Se-chan</h2>
                  </div>
              </div>
            </div>

            <div class="starring-card middle">
              <div class="front">
                  <img src="img/chong1.jpg" alt="">
              </div>
              <div class="back">
                  <div class="back-content middle">
                      <h2>Jeon So-min</h2>
                  </div>
              </div>
            </div>


          </div>
          <a href="starring.php">MORE <i class="fas fa-plus"></i></a>
        </div>
      </div>
            
            
      
      <!--multimedia-->
      <div class="section s4">
        <h2>MULTIMEDIA<br><span>Running man最新一期預告</span></h2>
          <div class="multimedia-container">
            
            

            <div class="multimedia-trailer">
              <img src="img/trailer-img1.jpg" alt="預告">
              <a href="#" id="trailer-btn"><i class="far fa-play-circle fa-5x"></i></a>
            </div>


            <div class="multimedia-content">
              
              <h3>Penthouse上流戰爭特輯第2彈 <br>2021 Running Man區運動會with Penthouse</h3>
              <p>嘉賓: <span>河道權、朴殷碩、尹鐘焄</span></p>
              <a href="multimedia.php">MORE MULTIMEDIA<i class="fas fa-plus"></i></a>
            </div>

          </div>

          <div class="trailer">
            <video src="video/trailer1.mp4" controls="true"></video>
            <img src="img/close.png" alt="close" class="close">
          </div>
      </div>
      <!--e-shop-->
      <div class="section s5">
          <div class="e-shop-container">
            <h2>E-SHOP<br><span>Running man人氣周邊商品</span></h2>
            
            <div class="e-shop-product">
              <div class="product-box">
                 <img src="img/product1.jpg" alt="">
                 <p>長頸鹿李光洙手機保護殼</p>
                 <p>NT$ 220</p>
                 <div>
                   <h4>BEST</h4>
                   <p>1</p>
                 </div>
              </div>
              <div class="product-box">
                 <img src="img/product2.jpg" alt="">
                 <p>Running man 專屬運動鞋</p>
                 <p>NT$ 2300</p>
                 <div>
                  <h4>BEST</h4>
                  <p>2</p>
                </div>
              </div>
              <div class="product-box">
                 <img src="img/product3.jpg" alt="">
                 <p>Running man 乳酸飲料</p>
                 <p>NT$ 90</p>
                 <div>
                  <h4>BEST</h4>
                  <p>3</p>
                </div>
              </div>
            </div>

          
            
            <a href="e-shop.php">MORE <i class="fas fa-plus"></i></a>
          </div>
      </div>
     

      <div class="section s6">
            <div class="project-join-container">
              <h2>PROJECT JOIN<br><span>Running man節目企劃參與</span></h2>
              <div class="project-join-info">
                <p>SBS Running man 節目企劃參與欄</p>
                <small>我也要當Running man節目企劃~進到我們的節目參與意見欄提供您最有創意的想法吧</small>
              </div>

              <a href="project.php">MORE <i class="fas fa-plus"></i></a>
            </div>
    
      </div>
  </div>

  

 
    

  
        
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.9/fullpage.min.js" integrity="sha512-Gx/C4x1qubng2MWpJIxTPuWch9O88dhFFfpIl3WlqH0jPHtCiNdYsmJBFX0q5gIzFHmwkPzzYTlZC/Q7zgbwCw==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TimelineMax.min.js" integrity="sha512-lJDBw/vKlGO8aIZB8/6CY4lV+EMAL3qzViHid6wXjH/uDrqUl+uvfCROHXAEL0T/bgdAQHSuE68vRlcFHUdrUw==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js" integrity="sha512-8Wy4KH0O+AuzjMm1w5QfZ5j5/y8Q/kcUktK9mPUVaUoBvh3QPUZB822W/vy7ULqri3yR8daH3F58+Y8Z08qzeg==" crossorigin="anonymous"></script>
    <script src="js/all.js"></script>
  
</body>
</html>