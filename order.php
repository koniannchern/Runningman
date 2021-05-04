<?php

session_start();
include("config/db.php");
include("functions.php");



?>



<!DOCTYPE html>
<html lang="zh-Hang-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Running man</title>
    <link rel="stylesheet" href="css/order.css">
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
     <!--購物順序標題-->
     <div class="order-step-title">
        <h3>THANK YOU!</h3>
        <p>感謝您對Running man的信任與支持 :)</p>
        <p>為確保商品能順利送達，請填寫正確完整資料。</p>
      </div>

    <!--購物順序-->
    <div class="order-step">
        <div class="box step-box1">
          <p>1</p>
          <span></span>
        </div>
        <div class="box step-box2">
         <p>2</p>
         <span></span>
       </div>
       <div class="box step-box3">
         <p>3</p>
       </div>

     </div>

     <!--購物詳細資訊-->
     <div class="order-detail">

         <div class="deliver-info">
             <span>送貨資料</span>
             <label for="receiver-name">收件人名稱</label>
             <input type="text" id="receiver-name">
             <small>請填入收件人真實姓名，以確保順利收件</small>
             <label for="receiver-phone">收件人電話號碼</label>
             <input type="tel" id="receiver-phone">
             <span>
                 <img src="img/7-11.png" alt="">
                 <p>選擇門市</p>
             </span>
             <a href="#" class="btn">搜尋門市</a>
             <label for="credit-card">信用卡卡號</label>
             <input type="text" id="credit-card">
             <label for="card-name">持卡人姓名</label>
             <input type="text" id="card-name">
         </div>

         <div class="customer-info">
            <span>顧客資料</span>
            <label for="customer-name">顧客名稱</label>
            <input type="text" id="customer-name">
            <label for="email">電子信箱</label>
            <input type="email">
            <label for="phone">電話號碼</label>
            <input type="tel" id="phone">
            <small>v.韓國商品熱銷易有斷、缺貨情況敬請見諒</small>
            <small>v.如遇商品斷、缺貨將以簡訊通知，並於訂單內詢問後續處理事宜</small>
            <small>v.不接受因某件商品斷貨而要求取消整張訂單</small>
            <small>v.無法接受臨時斷、缺貨請勿購買</small>
        </div>
     </div>
     
     <a href="finish.php" class="btn btn-send-order">提交訂單</a>

     

     

     <!--footer-->
     <div class="footer">
         <p>개인정보취급방침</p>
         <p>COPYRIGHT © KINGKONG by STARSHIP ENTERTAINMENT ALL RIGHTS RESERVED.</p>
     </div>

     
     
     
     
 
    

  
        
    
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="js/order.js"></script>
  
</body>
</html>