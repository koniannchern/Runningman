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
    <link rel="stylesheet" href="css/starring.css">
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
     <!--starring profile-->
     

     <div class="profile-container">
        
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#yu" role="tab" aria-controls="home" aria-selected="true">劉在石</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#ji" role="tab" aria-controls="profile" aria-selected="false">池石鎮</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#kim" role="tab" aria-controls="contact" aria-selected="false">金鐘國</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#song" role="tab" aria-controls="contact" aria-selected="false">宋智孝</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#haha" role="tab" aria-controls="contact" aria-selected="false">哈哈</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#li" role="tab" aria-controls="contact" aria-selected="false">李光洙</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#yang" role="tab" aria-controls="contact" aria-selected="false">梁世燦</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#chong" role="tab" aria-controls="contact" aria-selected="false">全昭旻</a>
            </li>
          </ul>

          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="yu" role="tabpanel" aria-labelledby="home-tab">
                <div class="row">
                    <div class="col-lg-6">
                       <div class="profile-photo">Photo</div>
                       <img src="img/yu-img.jpg" alt="劉在石">
                    </div>
                    <div class="col-lg-6">
                        <div class="profile-content">Profile</div>
                        <div class="profile-text">
                            <h2>劉在石(Yoo Jae-Seok)</h2>
                            <ul>
                                <li><span>綽號 :</span><span>國民MC、劉魯斯威利斯、蚱蜢</span></li>
                                <li><span>生日 :</span><span>1972年8月14日</span></li>
                                <li><span>專長 :</span><span>跳舞</span></li>
                                <li><span>夢想 :</span><span>當dance王</span></li>
                                <li><span>簡介 :</span><span>韓國國民MC，無名時期主持節目時常帶著蚱蜢頭套，因而有「蚱蜢」之名，分別於韓國三大無線電視台KBS、MBC、SBS，每一檔固定主持節目皆播出超過10年</span></li>
                            </ul>
                            <h3>主要經歷</h3>
                            <ul>
                                <li>2019年~ MBC 玩甚麼好呢?</li>
                                <li>2018年~ tvN 劉Quiz on the block </li>
                                <li>2010年~ SBS Running man </li>
                                <li>2006年~ MBC 無限挑戰</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="ji" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="row">
                    <div class="col-lg-6 col-12">
                       <div class="profile-photo">Photo</div>
                       <img src="img/ji-img.jpg" alt="池石鎮">
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="profile-content">Profile</div>
                        <div class="profile-text">
                            <h2>池石鎮(Jee Seok-jin)</h2>
                            <ul>
                                <li><span>綽號 :</span><span>王鼻子、黑斑羚、Race Starter</span></li>
                                <li><span>生日 :</span><span>1966年2月10日</span></li>
                                <li><span>專長 :</span><span>講些奇怪的話</span></li>
                                <li><span>夢想 :</span><span>淘汰金鐘國</span></li>
                                <li><span>簡介 :</span><span>鼻子大是特色，跟光珠、哈哈同樣是背叛者聯盟成員，實力很弱，分組的時候時常被嘉賓忽略，由於太弱，通常都是最先被淘汰的人</span></li>
                            </ul>
                            <h3>主要經歷</h3>
                            <ul>
                                <li>2016年~ Radio MBC FM4U 2點的約會，我是池錫辰</li>
                                <li>2010年~ SBS Running man </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="kim" role="tabpanel" aria-labelledby="nav-contact-tab">
                <div class="row">
                    <div class="col-lg-6 col-12">
                       <div class="profile-photo">Photo</div>
                       <img src="img/kim-img.jpg" alt="金鐘國">
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="profile-content">Profile</div>
                        <div class="profile-text">
                            <h2>金鐘國(Kim Jong-kook)</h2>
                            <ul>
                                <li><span>綽號 :</span><span>能力者、老虎、斯巴達國斯</span></li>
                                <li><span>生日 :</span><span>1976年4月25日</span></li>
                                <li><span>專長 :</span><span>用到力氣的事</span></li>
                                <li><span>夢想 :</span><span>當健身房館長</span></li>
                                <li><span>簡介 :</span><span>靠力氣和過人的頭腦吃飯，在當年的Xman中和尹恩惠傳過誹聞</span></li>
                            </ul>
                            <h3>主要經歷</h3>
                            <ul>
                                <li>2016年~ SBS 我家的熊孩子 </li>
                                <li>2010年~ SBS Running man </li>
                                <li>2006年~ SBS Xman 星期天真好</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="song" role="tabpanel" aria-labelledby="nav-contact-tab">
                <div class="row">
                    <div class="col-lg-6 col-12">
                       <div class="profile-photo">Photo</div>
                       <img src="img/song-img.jpg" alt="宋智孝">
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="profile-content">Profile</div>
                        <div class="profile-text">
                            <h2>宋智孝(Song Ji-hyo)</h2>
                            <ul>
                                <li><span>綽號 :</span><span>懵智孝、Ace智孝、週一女友</span></li>
                                <li><span>生日 :</span><span>1981年8月15日</span></li>
                                <li><span>專長 :</span><span>耍懵</span></li>
                                <li><span>夢想 :</span><span>當ga禮夫人</span></li>
                                <li><span>簡介 :</span><span>節目中直爽豪邁，和前成員gary被稱為周一情侶，女漢子一枚</span></li>
                            </ul>
                            <h3>主要經歷</h3>
                            <ul>
                                <li>2014年~ 電視劇 急診男女</li>
                                <li>2020年~ 電影 侵入者 </li>
                                <li>2010年~ SBS Running man </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="haha" role="tabpanel" aria-labelledby="nav-contact-tab">
                <div class="row">
                    <div class="col-lg-6 col-12">
                       <div class="profile-photo">Photo</div>
                       <img src="img/haha-img.jpg" alt="哈哈">
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="profile-content">Profile</div>
                        <div class="profile-text">
                            <h2>哈哈(HA HA))</h2>
                            <ul>
                                <li><span>綽號 :</span><span>Haroro、企鵝、麻浦區保安官</span></li>
                                <li><span>生日 :</span><span>1979年8月20日</span></li>
                                <li><span>專長 :</span><span>對女來賓絆腳</span></li>
                                <li><span>夢想 :</span><span>長高</span></li>
                                <li><span>簡介 :</span><span>背叛者聯盟成員之一，喜歡調侃女來賓，調皮搗蛋，但是結婚之後有比較收斂了</span></li>
                            </ul>
                            <h3>主要經歷</h3>
                            <ul>
                                <li>2006年~ MBC 無限挑戰</li>
                                <li>2006年~ SBS Xman 禮拜天真好 </li>
                                <li>2010年~ SBS Running man </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="li" role="tabpanel" aria-labelledby="nav-contact-tab">
                <div class="row">
                    <div class="col-lg-6 col-12">
                       <div class="profile-photo">Photo</div>
                       <img src="img/li-img.jpg" alt="李光洙">
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="profile-content">Profile</div>
                        <div class="profile-text">
                            <h2>李光洙(Lee Kwang-soo)</h2>
                            <ul>
                                <li><span>綽號 :</span><span>光凡達、長頸鹿、亞洲王子、光蟾蜍、李光子</span></li>
                                <li><span>生日 :</span><span>1985年7月14日</span></li>
                                <li><span>專長 :</span><span>背叛、陷入愛情</span></li>
                                <li><span>夢想 :</span><span>淘汰金鐘國</span></li>
                                <li><span>簡介 :</span><span>背叛專家，擅長耍一些小手段戲弄其他人，容易陷入愛情，只要是漂亮的女嘉賓都喜歡</span></li>
                            </ul>
                            <h3>主要經歷</h3>
                            <ul>
                                <li>2018年~ 電視劇 Live </li>
                                <li>2010年~ SBS Running man </li>
                                <li>2006年~ 電視劇 沒關係 是愛情呀</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="yang" role="tabpanel" aria-labelledby="nav-contact-tab">
                <div class="row">
                    <div class="col-lg-6 col-12">
                       <div class="profile-photo">Photo</div>
                       <img src="img/yang-img.jpg" alt="梁世燦">
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="profile-content">Profile</div>
                        <div class="profile-text">
                            <h2>梁世燦(Yang Se-chan)</h2>
                            <ul>
                                <li><span>綽號 :</span><span>梁草莓、小不點、新興臭手</span></li>
                                <li><span>生日 :</span><span>1986年12月8日</span></li>
                                <li><span>專長 :</span><span>搞笑</span></li>
                                <li><span>夢想 :</span><span>當公務員</span></li>
                                <li><span>簡介 :</span><span>牙齦美男，諧星出身，和全昭旻是友達以上戀人未滿的關係，</span></li>
                            </ul>
                            <h3>主要經歷</h3>
                            <ul>
                                <li>2011年~ tvN 喜劇大聯盟 </li>
                                <li>2010年~ SBS Running man </li>                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="chong" role="tabpanel" aria-labelledby="nav-contact-tab">
                <div class="row">
                    <div class="col-lg-6 col-12">
                       <div class="profile-photo">Photo</div>
                       <img src="img/chong-img.jpg" alt="全昭旻">
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="profile-content">Profile</div>
                        <div class="profile-text">
                            <h2>全昭旻(Jeon So-min)</h2>
                            <ul>
                                <li><span>綽號 :</span><span>瘋昭旻、磁鐵人、青蛙</span></li>
                                <li><span>生日 :</span><span>1986年4月7日</span></li>
                                <li><span>專長 :</span><span>講瘋話</span></li>
                                <li><span>夢想 :</span><span>當偶像練習生</span></li>
                                <li><span>簡介 :</span><span>肖婆一枚，沒有形象，具備比諧星更有潛力的女演員，和成員梁世燦過從甚密，</span></li>
                            </ul>
                            <h3>主要經歷</h3>
                            <ul>
                                <li>2013年~ 電視劇 歐若拉公主</li>
                                <li>2014年~ 電視劇 沒有盡頭的愛情 </li>
                                <li>2010年~ SBS Running man </li>
                            </ul>
                        </div>
                    </div>
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
    <script src="js/starring.js"></script>
  
</body>
</html>