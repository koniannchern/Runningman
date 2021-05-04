new fullpage('#fullPage',{
  autoScrolling: true,
  navigation: true,
  anchors: ['section1','section2','section3','section4','section5','section6'],
  navigationTooltips: ['Home','About','Starring','Multimedia','E-shop','Project join'],
  showActiveTooltip: true,
  scrollingSpeed: 1000,
  onLeave: (origin,destination,direction) =>{
    const t1 = new TimelineMax({delay: 0.5});
    if(destination.index === 1){
      const program = document.querySelector('.program');
      t1.fromTo(program,1,{x:"5%",opacity:0},{x:"0%",opacity:1});
    }
    if(destination.index === 2){
      const starring = document.querySelector('.starring');
      t1.fromTo(starring,1,{x:"-5%",opacity:0},{x:"0%",opacity:1});
    }
    if(destination.index === 3){
      const multimedia = document.querySelector('.multimedia-container');
      t1.fromTo(multimedia,1,{x:"5%",opacity:0},{x:"0%",opacity:1});
    }
    if(destination.index === 4){
      const eShop = document.querySelector('.e-shop-container');
      t1.fromTo(eShop,1,{x:"-5%",opacity:0},{x:"0%",opacity:1});
    }
    if(destination.index === 5){
      const projectJoin = document.querySelector('.project-join-container');
      t1.fromTo(projectJoin,1,{x:"5%",opacity:0},{x:"0%",opacity:1});
    }
  }
})

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
let btn = document.getElementById('trailer-btn');
let close = document.querySelector('.close');

close.addEventListener('click',toggle);
btn.addEventListener('click',toggle);

function toggle(){
    var trailer = document.querySelector('.trailer');
    var video = document.querySelector('video');
    trailer.classList.toggle('active')
    video.pause();
    video.currentTime = 0;
}
