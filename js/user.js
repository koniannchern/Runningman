

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

//GLOBAL
var products=JSON.parse(localStorage.getItem('cart'));
var cartItems=[];
var cart_n = document.getElementById('cart_n');
var table= document.getElementById("table");
var total=0;
var cancel = document.querySelector('.btn-danger')
//HTML
function tableHTML(i){
    return `
                <tr>
                <th scope="row">${i+1}</th>
                <td><img style="width:90px;" src="${products[i].url}" ></td>
                <td>${products[i].name}</td>
                <td>1</td>
                <td>${products[i].price}</td>
                </tr>
    `;
}

//buy
function buy() {
    var d = new Date();
    var t = d.getTime();
    var counter=t;
    counter+=1;
    let db=firebase.database().ref("order/"+counter);
    let itemdb={
        id:counter,
        order:counter-895,
        total:total
    }
    db.set(itemdb);
    swal({
        position:'center',
        type:'success',
        title:'Purchase made successfully!',
        text:`Your purchase order is: ${itemdb.order}`,
        showConfirmButton:true,
        timer:50000
    });
    clean();
}
//clean
function clean() {
        localStorage.clear();
        for (let index = 0; index < products.length; index++) {
            table.innerHTML+=tableHTML(index);
            total=total+parseInt(products[index].price);
        }
        total=0;
        table.innerHTML=`
        <tr>
        <th ></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        </tr>
        `;
        cart_n.innerHTML='';
        document.getElementById("btnBuy").style.display="none";
        document.getElementById("btnClean").style.display="none";
}


//RENDER 
function render(){
    for (let index = 0; index < products.length; index++) {
        table.innerHTML+=tableHTML(index);
        total=total+parseInt(products[index].price);
    }
    table.innerHTML+=`
    <tr>
    <th scope="col" ></th>
    <th scope="col"></th>
    <th scope="col"></th>
    <th scope="col"></th>
    <th scope="col">合計: NT$${total}</th>
    </tr>
    <tr>
    <th scope="col" ></th>
    <th scope="col"></th>
    <th scope="col"></th>
    <th scope="col">
        <button id="btnClean" onclick="clean()" class="btn text-white btn-warning">清除購物車</button>
    </th>
    <th scope="col"><a href="order.php" id="btnBuy" onclick="buy()" class="btn btn-success">前往結帳</a></th>
    </tr>

    `;
    products=JSON.parse(localStorage.getItem("cart"));
    cart_n.innerHTML=`[${products.length}]`;
}