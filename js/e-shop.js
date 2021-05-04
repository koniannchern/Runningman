

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


//購物車
var products=[];
var cartItems=[];
var cart_n = document.getElementById('cart_n');
// DIVS
var productDIV= document.getElementById("productDIV");

//商品資料
var PRODUCT=[
  {name:'長頸鹿李光洙手機保護殼' ,price:220},
  {name:'Running man 專屬運動鞋' ,price:2300},
  {name:'Running man 乳酸飲料' ,price:90},
  {name:'Running man紀念T-shirt' ,price:780},
  {name:'Running man 雙肩包' ,price:1800},
  {name:'Running man 應援Q版抱枕' ,price:520}
];

//HTML

function HTMLProduct(con){
  let URL = `img/product${con}.jpg`;
  let btn = `btnProduct${con}`;
  return `
      
      <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
              <img class="card-img-top" style="height:20rem;" src="${URL}" alt="Card image cap">
              <div class="card-body">
                  <i style="color:orange;" class="fa fa-star"  ></i>
                  <i style="color:orange;" class="fa fa-star"  ></i>
                  <i style="color:orange;" class="fa fa-star"  ></i>
                  <i style="color:orange;" class="fa fa-star"  ></i>
                  <i style="color:orange;" class="fa fa-star"  ></i>
                  <p class="card-text">${PRODUCT[con-1].name}</p>
                  <p class="card-text">售價: ${PRODUCT[con-1].price}</p>
                  <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                          <button type="button" onclick="cart2('${PRODUCT[con-1].name}','${PRODUCT[con-1].price}','${URL}','${con}','${btn}')" class="btn btn-sm btn-outline-secondary" ><a style="color:inherit;" href="user.php">立刻購買</a></button>
                          <button id="${btn}" type="button" onclick="cart('${PRODUCT[con-1].name}','${PRODUCT[con-1].price}','${URL}','${con}','${btn}')" class="btn btn-sm btn-outline-secondary" >加入購物車</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  `
}

//ANIMATION 
function animation(){
  const toast=swal.mixin({
      toast:true,
      position:'top-end',
      showConfirmButton:false,
      timer:1000
  });
  toast({
      type:'success',
      title: '已加入購物車'
  });
}

//購物車FUNCTION
function cart(name,price,url,con,btncart){
  var item={
      name:name,
      price:price,
      url:url
  }
  cartItems.push(item);
  let storage= JSON.parse(localStorage.getItem("cart"));
  if (storage==null) {
          products.push(item);
          localStorage.setItem("cart",JSON.stringify(products));
  } else {
      products= JSON.parse(localStorage.getItem("cart"));
      products.push(item);
      localStorage.setItem("cart",JSON.stringify(products));
  }
  products= JSON.parse(localStorage.getItem("cart"));
  cart_n.innerHTML=`[${products.length}]`;
  document.getElementById(btncart).style.display="none";
  animation();
}
function cart2(name,price,url,con,btncart){
  var item={
      name:name,
      price:price,
      url:url
  }
  cartItems.push(item);
  let storage= JSON.parse(localStorage.getItem("cart"));
  if (storage==null) {
      products.push(item);
      localStorage.setItem("cart",JSON.stringify(products));
  } else {
  products= JSON.parse(localStorage.getItem("cart"));
  products.push(item);
  localStorage.setItem("cart",JSON.stringify(products));
  }
  products= JSON.parse(localStorage.getItem("cart"));
  cart_n.innerHTML=`[${products.length}]`;
  document.getElementById(btncart).style.display="none";
}


//渲染頁面
function render(){
  for (let index = 1; index <= 6; index++) {
      productDIV.innerHTML+=`${HTMLProduct(index)}`;
  }
  if (localStorage.getItem("cart")==null) {
      
  } else {
      products=JSON.parse(localStorage.getItem("cart"));
      cart_n.innerHTML=`[${products.length}]`;
  }

}


