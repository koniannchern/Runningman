<?php

session_start();
require('config/config.php');
require('config/db.php');

//Check For Submit
if(isset($_POST['submit'])){
    //Get form data
    $title = mysqli_real_escape_string($conn,$_POST['title']);
    $body = mysqli_real_escape_string($conn,$_POST['body']);
    $author = mysqli_real_escape_string($conn,$_POST['author']);

    $query = "INSERT INTO joinpro(title,author,body) VALUES('$title','$author','$body')";
    if(mysqli_query($conn,$query)){
        header('Location: project.php');
    }else{
        echo 'ERROR: '.mysqli_error($conn);
    }
}


?>


<!DOCTYPE html>
<html lang="zh-Hang-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Running man</title>
    <link rel="stylesheet" href="css/addpost.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/paper.js/0.9.24/paper-full.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
  </head>
  <body>
    <div class="background-img"></div>
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
     <!--節目企劃輸入-->
     <div class="project-container">
     <div class="addpost">
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="form-group">
              <label>標題</label>
              <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
              <label>作者</label>
              <input type="text" name="author" class="form-control">
            </div>
            <div class="form-group">
              <label>企劃內容</label>
              <textarea name="body" class="form-control"></textarea>
            </div>
            <p>*良好的網路文化需你我共同維護，只有善意的意見才會被製作組採納喔</p>
            <p>*惡性的批評將會被管理員刪除留言，並限制留言資格</p>
            <p>*本留言板為觀眾提供節目企劃發想的空間，請勿在此留下電話、地址等個人情報</p>
            <p>*如留下個人情報，管理者有權利將其刪除</p>
             <input type="submit" name="submit" value="提交" class="btn btn-primary">
        </form>
        <img src="img/project-join.png" alt="">

      </div>
     </div>
     
         

     

     <!--footer-->
     <div class="footer">
         <p>개인정보취급방침</p>
         <p>COPYRIGHT © KINGKONG by STARSHIP ENTERTAINMENT ALL RIGHTS RESERVED.</p>
     </div>

     
     
     
     
 
    

  
        
    
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="js/starring.js"></script>
  
</body>
</html>