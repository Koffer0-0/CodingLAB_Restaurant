var cart = {};
function loadCart() {
    //проверяю есть ли в localStorage запись cart
    if (localStorage.getItem('cart')) {
        // если есть - расширфровываю и записываю в переменную cart
        cart = JSON.parse(localStorage.getItem('cart'));
            showCart();
        }
    else {
        $('.main-cart').html('Корзина пуста!');
    }
}

function showCart() {
    //вывод корзины
    if (!isEmpty(cart)) {
        $('.main-cart').html('Корзина пуста!');
    }
    else {
        $.getJSON('goods2.json', function (data) {
            var goods = data;
            var out = '';
            for (var id in cart) {
                out += `<button data-id="${id}" class="del-goods">x</button>`;
                out += `<img src="images/${goods[id].picture}">`;
                out += ` <p>${goods[id].title} ---- ${cart[id]}</p>`;
                out += '<br>';
            }
            $('.main-cart').html(out);
            $('.del-goods').on('click', delGoods);
        });
    }
}

function delGoods() {
    //удаляем товар из корзины
    var id = $(this).attr('data-id');
    delete cart[id];
    saveCart();
    showCart();
}

function saveCart() {
    //сохраняю корзину в localStorage
    localStorage.setItem('cart', JSON.stringify(cart)); //корзину в строку
}

function isEmpty(object) {
    //проверка корзины на пустоту
    for (var key in object)
    if (object.hasOwnProperty(key)) return true;
    return false;
}


$(document).ready(function () {
   loadCart();
});