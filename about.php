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
    <link rel="stylesheet" href="css/about.css">
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
          <li id="multimedia"><a href="multimedia.php">Multimedia</a></li>
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
           <li><?php if(isset($_SESSION['user_id'])): ?>
             <a href="login.php">LOGOUT</a>
          <?php else: ?>
            <a href="login.php">LOGIN</a>
          <?php endif; ?></li>
           <li><a href="join.php">JOIN</a></li>
         </ul>
       </div>
     </div>
     <!--about running man-->
     <div class="running-man-intro">
         <div class="intro-title">PROGRAM INTRODUCTION</div>
         <div class="row">
             <div class="col-lg-6 col-12">
                 <div class="program-intro-img">
                    <img src="img/about-img.jpg" alt="">
                 </div>
             </div>
             <div class="col-lg-6 col-12">
                 <div class="program-intro-content">
                    <h2>Running man</h2>
                    <ul>
                        <li><span>節目類型 :</span><span>真人秀、綜藝節目</span></li>
                        <li><span>節目導演 :</span><span>崔寶弼（音）（최보필）</span></li>
                        <li><span>播放期間 :</span><span>2010.7.11~</span></li>
                        <li><span>播放時間 :</span><span>每周日17:00</span></li>
                        <li><span>製作公司 :</span><span>SBS</span></li>
                        <li><span>主持成員 :</span><span>劉在錫、池錫辰、金鍾國、哈哈、宋智孝、李光洙 、全昭旻 、梁世燦</span></li>
                    </ul>
                    <h3>節目簡介</h3>
                    <p>《Running Man》（韓語：런닝맨）是韓國SBS電視台的綜藝節目，於2010年7月11日啟播。節目在一開始屬於《星期天真好》時段的其中一部，直到該時段於2017年3月19日完結後才正式成為獨立節目。
   
                       由2012年5月6日開始，逢韓國時間星期日下午6時10分開始播放，每集約80-99分鐘；自2015年11月8日起，逢韓國時間星期日下午4時50分開始播放；自2016年4月17日起，逢韓國時間星期日下午6時25分開始播放；自2017年3月26日起，逢韓國時間星期日下午4時50分開始播放；自2019年1月6日起，逢韓國時間星期日下午5時整開始播放。臺灣原由FOX頻道取得官方授權集數（至第261集），自2015年1月至12月底（至第331集），可於LINE TV線上觀看官方授權完整版（自第274集起，除第275、276集外，均有各集完整內容），自2017年12月10日起每週日愛奇藝台灣站跟播。自2020年1月6日起每週一friDay影音緊貼韓國跟播</p>
                   <p>初期的遊戲設定是嘉賓與主持們被鎖於韓國著名地標進行遊戲，並需於其開始營業前逃出，經過幾輪遊戲後輸掉的成員，會被安排在人來人往的地點中接受尷尬的懲罰。2011年5月以後取消輸家的懲罰，不定期給予勝者獎品，並且遊戲方式更改為先於各地進行任務，由勝出的成員或隊伍獲得對最終任務的有利提示或權力，而節目遊戲中最著名的環節就是緊張刺激的撕名牌戰，或以名牌衍生的相關對決</p>
                 </div>
             </div>
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
   <script src="js/about.js"></script>
 
</body>
</html>