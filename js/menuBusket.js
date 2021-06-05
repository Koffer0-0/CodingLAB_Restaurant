var cart = {}; // корзина продуктов
function init() {
    //вычитуем файл goods.json и закидывает в фунцию гудсаут
     $.getJSON("test.json", goodsOut);
    /*$.post(
        "admin/core.php",
        {
            "action" : "loadGoods"
        },
        goodsOut()
    );*/
}

function goodsOut(data) {
    // вывод на страницу
    //data = JSON.parse(data);
    var out = '';
    for (var key in data) 
    {
        out+=`<div class="col-6 menuProduct align-items-start" data-category="${data[key].category}" >`;
        out+=`<div class="menuLeft"><img src="images/${data[key].picture}"></div>`;
        out+=`<div class="menuRight">`;
        out+=`<p>${data[key].title}<b style="float: right;">${data[key].price} tg</b></p>`;
        out+=`<p>${data[key].description}</p>`;
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
function deleteToCart(){
    var id=$(this).attr('data-id');
    delete cart[id];
    saveCart();
    showMiniCart();
}
function showMiniCart() {
    //показываю мини корзину
    $.getJSON("test.json", function(data){
        var goods=data;
        var out="";
        for (var id in cart) 
        {
        out+=`<div class="basketProduct">`;
        out+=`<div class="basketLeft"><img src="images/${goods[id].picture}"></div>`;
        out+=`<div class="basketRight">`;
        out+=`<p>${goods[id].title}<b style="float: right;">${goods[id].price} tg</b></p>`;
        out+=`<div>`;
        out+=`<button><img class="minus-to-cart" data-id="${id}" src="images/minus.png"></button>`;
        out+=`<span>  ${cart[id]}  </span>`;
        out+=`<button><img class="plus-to-cart" data-id="${id}" src="images/plus.png"></button>`;
        out+=`<button style="float:right;"><img class="delete-to-cart" data-id="${id}" src="images/trush.png"></button>`;
        out+=`</div></div></div>`;
        }
        $('.mini-cart').html(out);
        $('.plus-to-cart').on('click', plusToCart);
        $('.minus-to-cart').on('click', minusToCart);
        $('.delete-to-cart').on('click', deleteToCart);
    }); 
}
function plusToCart() {
    //добавляем товар в корзину
    var id = $(this).attr('data-id');
        cart[id]++; //если такой товар есть - увеличиваю на единицу
    showMiniCart();
    saveCart();
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

function isEmpty(object) {
    //проверка корзины на пустоту
    for (var key in object)
    if (object.hasOwnProperty(key)) return true;
    return false;
}
function sendEmail() {
    var name = $('#name').val();
    var email = $('#email').val();
    var phone = $('#phone').val();
    if (name=='' || email=='' || phone=='') 
    {
        alert('Заполните поля');
    }
    else 
    {
        if (!isEmpty(cart)) 
        {
            alert('Корзина пуста');            
        }
        else 
        {
            $.post(
                "core/mail.php",
                {
                    "name" : name,
                    "email" : email,
                    "phone" : phone,
                    "cart" : cart
                },
                function(data){
                    //console.log(data);
                    if (data==1) {
                        alert('Заказ отправлен');
                    }
                    else {
                        alert('Ошибка не получилось отправить');
                    }
                }
            );
        }
    }

}
$(document).ready(function () {
    init();
    loadCart();
    $('.menuSendModal').on('click',sendEmail);
});
function saveCart() {
    //сохраняю корзину в localStorage
    localStorage.setItem('cart', JSON.stringify(cart)); //корзину в строку
}
function loadCart() {
    //проверяю есть ли в localStorage запись cart
    if (localStorage.getItem('cart')) {
        // если есть - расширфровываю и записываю в переменную cart
        cart = JSON.parse(localStorage.getItem('cart'));
        showMiniCart();
    }
}

