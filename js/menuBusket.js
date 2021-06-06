var cart = {}; // корзина продуктов
function init() {
    //вычитуем файл goods.json и закидывает в фунцию гудсаут
    $.post(
        "Admin/core.php",
        {
            "action" : "loadGoods"
        },
        goodsOut
    );
}
function goodsOut(data) {
    // вывод на страницу
    data = JSON.parse(data);
    var out = '';
    for (var key in data) 
    {
        out+=`<div class="col-6 menuProduct" data-category="${data[key].Category}" >`;
        out+=`<div class="menuLeft"><img src="images/${data[key].Picture}"></div>`;
        out+=`<div class="menuRight">`;
        out+=`<p>${data[key].Title}<b style="float: right;">${data[key].Price} tg</b></p>`;
        out+=`<p>${data[key].Description}</p>`;
        out+=`<div style="float: right;" >`;
        out+=`<button><img class="add-to-cart" data-id="${key}" src="images/cart.png"></button>`;
        out+=`<button><img class="delete-to-cart" data-id="${key}" src="images/trush.png"></button>`;
        out+=`</div></div></div>`;
    }
    $('.goods-out-main').html(out);//все это вывожу на страницу
    $('.add-to-cart').on('click', addToCart);
    $('.delete-to-cart').on('click', deleteToCart);
}

function addToCart() {
    //добавляем товар в корзину
    var id = $(this).attr('data-id');
    // console.log(id);
    if (cart[id]==undefined) {
        cart[id] = 1; //если в корзине нет товара - делаем равным 1
    }
    else {
        cart[id]++; //если такой товар есть - увеличиваю на единицу
    }
    showMiniCart();
    saveCart();
}

function saveCart() {
    //сохраняю корзину в localStorage
    localStorage.setItem('cart', JSON.stringify(cart)); //корзину в строку
}

function showMiniCart() {
    //показываю мини корзину
    $.post(
        "Admin/core.php",
        {
            "action" : "loadGoods"
        },
        function(data){
        data = JSON.parse(data);
        var goods=data;
        var out="";
        for (var id in cart) 
        {
        out+=`<div class="basketProduct">`;
        out+=`<div class="basketLeft"><img src="images/${goods[id].Picture}"></div>`;
        out+=`<div class="basketRight">`;
        out+=`<p>${goods[id].Title}<b style="float: right;">${goods[id].Price} tg</b></p>`;
        out+=`<div>`;
        out+=`<button><img class="minus-to-cart" data-id="${id}" src="images/minus.png"></button>`;
        out+=`<span>  ${cart[id]}  </span>`;
        out+=`<button><img class="plus-to-cart" data-id="${id}" src="images/plus.png"></button>`;
        out+=`<button style="float:right;"><img class="delete-to-cart" data-id="${id}" src="images/trush.png"></button>`;
        out+=`</div></div></div>`;
        }
        $('.mini-cart').html(out);
        $('.minus-to-cart').on('click', minusToCart);
        $('.plus-to-cart').on('click', plusToCart);
        $('.delete-to-cart').on('click', deleteToCart);
    }); 
}
function deleteToCart(){
    var id=$(this).attr('data-id');
    delete cart[id];
    saveCart();
    showMiniCart();
}
function minusToCart(){
    //добавляем товар в корзину
    var id = $(this).attr('data-id');
    // console.log(id);
    if (cart[id]==1) {
        delete cart[id];
    }
    else {
        cart[id]--; //если такой товар есть - увеличиваю на единицу
    }
    showMiniCart();
    saveCart();
}
function plusToCart() {
    //добавляем товар в корзину
    var id = $(this).attr('data-id');
        cart[id]++; //если такой товар есть - увеличиваю на единицу
    showMiniCart();
    saveCart();
}
function deleteAllToCart()
{
    cart = {};
    saveCart();
    showMiniCart();    
}

function loadCart() {
    //проверяю есть ли в localStorage запись cart
    if (localStorage.getItem('cart')) {
        // если есть - расширфровываю и записываю в переменную cart
        cart = JSON.parse(localStorage.getItem('cart'));
        showMiniCart();
    }
}
$(document).ready(function () {
    init();
    loadCart();
    $('.deleteAll-to-cart').on('click',deleteAllToCart)
});
