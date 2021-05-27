$(function(){
    $('.double_top_right').slick({
        arrows: false,
        dots: true,
        autoplay: true,
        fade: true,
        responsive: [
            {
                breakpoint: 1150,
                settings: {
                    dots: false
                }
            }
        ]
        
    });

    $('.menu_btn').on('click', function(){
        $('.menu_list').toggleClass('menu_list--active');
    })
    
});