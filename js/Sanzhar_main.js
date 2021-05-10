var cart = {}; // корзина продуктов

function init() {
    //вычитуем файл goods.json и закидывает в фунцию гудсаут
    $.getJSON("goods2.json", goodsOut);
}

function goodsOut(data) {
    // вывод на страницу
    console.log(data);
    var out='';
    for (var key in data) {
        out+=`<div class = "col-6 food-menu ${data[key].category}">`;
        /*out+=`<div><img alt = "Menu Image" src = "images/${data[key].picture}"></div>`;
        out+=`</div>`;*/
        out+=`<div class="sided-90x">`;
        out+=`<div class="s-left"><img alt = "Menu Image" src = "images/${data[key].picture}"></div>`;
        out+=`<div class="s-right">`;
        out+=`<h5><b>${data[key].title}</b><b class="color-primary float-right">${data[key].price} tg</b></h5> `;
        out+=`<p>${data[key].description}</p>`;
        out+=`<div><button><img class="add-to-cart" data-id="${key}" src="images/cart.png"></button></div>`;
        out+=`</div></div></div>`;
    }
    $('.goods-out').html(out);//все это вывожу на страницу
    $('.add-to-cart').on('click', addToCart);
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
    var out="";
    for (var key in cart) {
        out += key +' --- '+ cart[key]+'<br>';
    }
    $('.mini-cart').html(out);
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
});
