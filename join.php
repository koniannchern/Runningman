<?php

  session_start();
  include("config/db.php");
  include("functions.php");

  

  if($_SERVER['REQUEST_METHOD'] == "POST"){
    //something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){
       //save to database
       $user_id = random_num(20);
       $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

       mysqli_query($conn,$query);

       header("Location: success.php");
       die;
    }else{
        echo "請輸入正確的個人資料";
    }
}


?>
<!DOCTYPE html>
<html lang="zh-Hang-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Running man</title>
    <link rel="stylesheet" href="css/join.css">
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
     <!--join system-->
     <div class="join-box">
         <h2>會員註冊</h2>
         <p>Running man主題網站新會員註冊</p>
        <form method="post">
            <div class="form-group">
              <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="用戶名"> 
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="帳號" name="user_name">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" placeholder="電子信箱">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="密碼" name="password">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="密碼確認">
              </div>
              
              <span class="gender">
                 <p>性別</p>
                <input type="radio" id="male" name="gender" value="male">
                <label for="male">男生</label><br>
                <input type="radio" id="female" name="gender" value="female">
                <label for="female">女生</label><br>
              </span>
              
              
              <div class="form-group">
                <input placeholder="生日" class="form-control textbox-n" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" />
                
              </div>

              <div class="form-group">
                <input type="text" class="form-control" placeholder="住址">
              </div>


            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">我同意網站服務條款及隱私政策</label>
            </div>
            <button type="submit" class="btn btn-primary">JOIN</button>
          </form>
     </div>
    
     

    

     <!--footer-->
     <div class="footer">
         <p>개인정보취급방침</p>
         <p>COPYRIGHT © KINGKONG by STARSHIP ENTERTAINMENT ALL RIGHTS RESERVED.</p>
     </div>

     
     
     
     
 
    

  
        
    
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
     <script src="js/join.js"></script>
    
  
</body>
</html>