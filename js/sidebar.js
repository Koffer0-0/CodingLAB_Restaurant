
$('.btn-lol').on('click', function(e) {
        e.preventDefault();
        $('.side').toggleClass('side-active');
        $('.head').toggleClass('head-active');
        $('.footer').toggleClass('footer-active');

})
