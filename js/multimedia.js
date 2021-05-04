//漢堡選單
const menuBtn = document.querySelector('.menu-btn');
let sideMenu = document.querySelector('.side-menu');
let sideMenuUl = document.querySelector('.side-menu ul');
let contactFade = document.querySelector('.contact');
let headerTitle = document.querySelector('.navbar-wrapper h1 a');
let burgerBtn1 = document.querySelector('.menu-btn_burger1');
let burgerBtn2 = document.querySelector('.menu-btn_burger2');


menuBtn.addEventListener('click',function(){
  menuBtn.classList.toggle('open');
  if(menuBtn.classList.contains('open')){
    sideMenu.style.transform = 'translateX(0px)';
    sideMenuUl.className = 'side-menu-ul';
    contactFade.classList.add('contact-fadein');
    headerTitle.style.visibility = "hidden";
    burgerBtn1.style.background = '#fff';
    burgerBtn2.style.background = '#fff';
  }else{
    sideMenu.style.transform = 'translateX(-365px)';
    sideMenuUl.className = '';
    contactFade.classList.remove('contact-fadein');
    headerTitle.style.visibility = "visible";
    burgerBtn1.style.background = '#000';
    burgerBtn2.style.background = '#000';
  }
})

//預告片

let btn1 = document.getElementById('trailer-btn1');
let btn2 = document.getElementById('trailer-btn2');
let btn3 = document.getElementById('trailer-btn3');
let btn4 = document.getElementById('trailer-btn4');
let btn5 = document.getElementById('trailer-btn5');
let btn6 = document.getElementById('trailer-btn6');
let close = document.querySelector('.close');

close.addEventListener('click',toggle);

btn1.addEventListener('click',function(){
  var trailer = document.querySelector('.trailer');
  var video = document.querySelector('video');
  trailer.classList.toggle('active')
  video.pause();
  video.currentTime = 0;
  video.src = "video/trailer1.mp4";
})

btn2.addEventListener('click',function(){
  var trailer = document.querySelector('.trailer');
  var video = document.querySelector('video');
  trailer.classList.toggle('active')
  video.pause();
  video.currentTime = 0;
  video.src = "video/trailer2.mp4";
})

btn3.addEventListener('click',function(){
  var trailer = document.querySelector('.trailer');
  var video = document.querySelector('video');
  trailer.classList.toggle('active')
  video.pause();
  video.currentTime = 0;
  video.src = "video/trailer3.mp4";
})

btn4.addEventListener('click',function(){
  var trailer = document.querySelector('.trailer');
  var video = document.querySelector('video');
  trailer.classList.toggle('active')
  video.pause();
  video.currentTime = 0;
  video.src = "video/trailer4.mp4";
})

btn5.addEventListener('click',function(){
  var trailer = document.querySelector('.trailer');
  var video = document.querySelector('video');
  trailer.classList.toggle('active')
  video.pause();
  video.currentTime = 0;
  video.src = "video/trailer5.mp4";
})

btn6.addEventListener('click',function(){
  var trailer = document.querySelector('.trailer');
  var video = document.querySelector('video');
  trailer.classList.toggle('active')
  video.pause();
  video.currentTime = 0;
  video.src = "video/trailer6.mp4";
})

function toggle(){
  var trailer = document.querySelector('.trailer');
  var video = document.querySelector('video');
  trailer.classList.toggle('active')
  video.pause();
  video.currentTime = 0;
}
