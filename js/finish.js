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