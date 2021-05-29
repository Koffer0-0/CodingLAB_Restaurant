<?php 
	require('Database/connectDB.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>BeshBARmak</title>
	<link rel="shortcut icon" href="#">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<!-- MAXZONE -->
	<link rel = "preconnect" href = "https://fonts.gstatic.com">
    <link href = "https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel = "stylesheet" href = "css/reset.css">
    <link rel = "stylesheet" href = "css/slick.css">
    <link rel = "stylesheet" href = "css/jquery.fancybox.css">
<!--     <link rel="stylesheet" type = "text/css" href = "slick/slick-theme.css"/> -->
    <link rel = "stylesheet" href = "css/style_max.css">

	<!--ЗОНА ДЛЯ ПОДКЛЮЧЕНИЯ CSS ФАЙЛОВ К ОСНОВНОЙ СТРАНИЦЕ---------------------------------------------------------------->
   	<link rel = "stylesheet" href = "css/menu.css">
    
	<!--------------------------------------------------------------------------------------------------------------------->
</head>

<body>
<header>
        <div class="container">
            <div class="header_inner">
                <a class="logo" href="#">
                    <img class="logo_logo" src="images\logo.png" alt="logo">
                </a>
                <nav class="menu">
                    <button class="menu_btn"></button>
                    <ul class="menu_list">
                        <li class="menu_item"><a href="#" class="menu_list-link">Главное</a></li>
                        <li class="menu_item"><a href="#" class="menu_list-link">Меню</a></li>
                        <li class="menu_item"><a href="#" class="menu_list-link">Контакты</a></li>
                        <?php
                            
                            if ($_SESSION['user']) {
                                echo '<li class="menu_item"><a href="Authorization/logOut.php" class="menu_list-link">Выйти</a></li>';
                            } else {
                        ?>
                        <li class="menu_item"><a href="Authorization/loginpanel.php" class="menu_list-link">Авторизация</a></li>
                        <?php } ?>
                    </ul>
                </nav>
                <a class="tel" href="tel:8 800 555 35 35">+8 800 555 35 35</a>
                <span>
                    <?php
                    
                    $_SESSION['message'] = 'Wellcome!';
                    $Chel = $_SESSION['user']->login;
                    if ($_SESSION['user']) {
                        echo '<p class = "msg"> '.$_SESSION['message'].' '.$Chel.'</p>';

                    } ?>
                </span>
            </div>
        </div>
    </header>
    
    <section class="top">
        
        <div class="container">
            <div class="top_inner">
                <div class="top_background">
                    <img src="./images/logo_background_3.png" alt="background_image" class="background_img">
                    <h1 class="background_text">
                     CODING LAB RESTOURANT
                    </h1>
                    <p class="background_text_content">THE BEST RESTAURANT IN KAZAKHSTAN</p>
                </div>
            </div>
        </div>
    </section>

    <section class="double">
        <div class="container">
            <div class="double_top">
                
                <div class="double_top_left">
                    <h2 class="left_title">
                        THE BEST RESTAURANT IN KAZAKHSTAN
                    </h2>
                    <p class="left_text">
                        Приглашаем Вас в наш ресторан. Красивое и достойное место для отдыха, деловых переговоров и встреч, торжества или банкета
                    </p>
                    <a href="#form" class="reservation">ЗАБРОНИРОВАТЬ</a>
                </div>

                <div class="double_top_right">
                    <div class="slider_item">
                        <img src="images/slider/food_1.png" alt="slider" class="right_slider">
                        <p class="slider_text"><span>КЛЕТЧАТКА</span> <span>ЛЕГКОЕ</span> <span>ЗЕЛЕНЬ</span></p>
                    </div>

                    <div class="slider_item">
                        <img src="images/slider/food_2.png" alt="slider" class="right_slider">
                        <p class="slider_text"><span>ЗЕЛЕНЬ</span> <span>МЯСО</span> <span>САЛАТЫ</span></p>
                    </div>

                    <div class="slider_item">
                        <img src="images/slider/food_3.png" alt="slider" class="right_slider">
                        <p class="slider_text"><span>КРУПЫ</span> <span>МЯСО</span> <span>ОБЕД/УЖИН</span></p>
                    </div>

                    <div class="slider_item">
                        <img src="images/slider/food_4.png" alt="slider" class="right_slider">
                        <p class="slider_text"><span>КИТАЙСКОЕ</span> <span>СУП</span> <span>МЯСО</span></p>
                    </div>

                </div>
            </div>

            <div class="double_under">

                <div class="under_items">
                    <div class="under_item">
                        <img src="images/icon_menu.png" alt="item_icon" class="item_icon">
                        <p class="item_info">Лучшие блюда и широкий лист меню</p>
                    </div>
                    <div class="under_item">
                        <img src="images/icon_staff.png" alt="item_icon" class="item_icon">
                        <p class="item_info">Лучшее обслуживание на диком западе</p>
                    </div>
                    <div class="under_item">
                        <img src="images/icon_cooker.png" alt="item_icon" class="item_icon">
                        <p class="item_info">Опытный и приятный персонал</p>
                    </div>
                </div>

                <div class="under_to_order">
                    <a href="#" class="to_order_link">ХАЛЯЛ ПРОДУКЦИЯ</a>
                    <a href="#" class="to_order_link">СЕРТИФИКАТЫ</a>
                    <a href="#" class="to_order_link">МЕНЮ</a>
                </div>

            </div>
        </div>
    </section>


    <section class="personal">
        <div class="container">
            <div class="blocks">

                <div class="block_info">
                    <h3 class="block_info_title">
                        Лучшие в своей сфере!
                    </h3>
                    <p class="block_info_text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repelpiciatis. Necessitatibus autem et nisi.</p>
                    <p class="block_info_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda qua.</p>
                </div>

                <div class="block_person">
                     <img src="images/person-1.png" alt="person-1" class="person_photo">
                     <p class="person_name">Маратов Максат</p>
                     <p class="person_info">Офицант <br> Стаж Работы - 5 лет. Сбежал из психушки в прошлом году. <br> Закончил AITU.</p>
                </div>
                <div class="block_person">
                    <img src="images/person-2.png" alt="person-1" class="person_photo">
                    <p class="person_name">Акишев Темирлан</p>
                    <p class="person_info">Повар <br> Стаж Работы - 25 лет. <br> В 2021 был осужден за нелегальное хранение марихуаны.</p>
               </div>
               <div class="block_person">
                <img src="images/person-3.png" alt="person-1" class="person_photo">
                <p class="person_name">Совет Санжар</p>
                <p class="person_info">Бармен <br> Стаж Работы - 2 дня. <br>Думает что он Санжар, но на самом деле он Магжан.</p>
           </div>
            </div>
        </div>
    </section>

    <section class="v-header v-container">

        <div class="fullscreen-video-wrap">
          <video src="images/video.mp4" autoplay="true" loop="true" type="video/mp4" muted="muted">
        </video>

        </div>
        <div class="header-overlay"></div>
        <div class="header-content text-md-center">
          <h1>НАШ БАНКЕТНЫЙ ЗАЛ</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio quasi consequatur dolorum omnis iste sunt quae possimus magnam. Sunt, laboriosam?</p>
          <a href="#form" class="btn">ПОДРОБНО</a>
        </div>
    </section>

    <section class="section-b">

        <div class="container">
            <div class="info_inner">
                <div class="banquet_form">
                    <h2>ПОДРОБНО</h2>
                    <div class="text_block">
                        <p class="banquet_about">Наш ресторан - идеальное место для частных и корпоративных мероприятий!
                             С блюдами мирового уровня от шеф-повара Акишева Темирлана, отличным и профиссиональным 
                             обслуживанием от Маратова Максата и Советом Санжара с изысканными, гармоничными и безупречно
                              сбалансированными коктейлями мы украсим ваш вечер. В нашей библиотечной комнате вы можете с 
                              комфортом устроить ужин на 50 человек или коктейли на 65-75 человек для дневных или вечерних
                               мероприятий. Наш маленький холл идеально подходит для частных мероприятий или деловых встреч. 
                            Большой холл для больших вечеринок выкуп доступен для групп до 150 человек.</p>
                        <p class="banquet_about"><br>Мы проводим все специальные мероприятия, от деловых встреч,
                             приемов, дней рождения, свадеб и т. Д.
                            <br> <br> Мы готовы сесть с вами и составить индивидуальное
                             меню для ваших гостей.</p>

                    </div>
                </div>
                <div class="banquet_form_block" >
                    <form action="#" class="form_01">
                        <h2 id="form" class="form_title">ОСТАВИТЬ ЗАЯВКУ/ЗАБРОНИРОВАТЬ</h2>
                        <input type="text" class="form_input" placeholder="ВАШЕ ИМЯ:">  
                        <input type="text" class="form_input" placeholder="ВАШ НОМЕР ТЕЛЕФОНА:"> 

                        <button class="reservation">ОТПРАВИТЬ</button>
                        </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="footer_top">
                <a class="logo" href="#">
                    <img class="logo_logo" src="images\logo.png" alt="logo">
                </a>
                <nav class="menu">
                    <ul class="menu_list">
                        <li class="menu_item"><a href="#" class="menu_list-link">Главное</a></li>
                        <li class="menu_item"><a href="#" class="menu_list-link">Меню</a></li>
                        <li class="menu_item"><a href="#" class="menu_list-link">Контакты</a></li>
                        <li class="menu_item"><a href="#" class="menu_list-link">Админка</a></li>
                    </ul>
                </nav>
                <a class="tel" href="tel:777777777">+777777777</a>
            </div>
            
        </div>
    </footer>

    <footer class="footer_2">
        <div class="container">
            <div class="footer_inner">
                <div class="footer_col">
                    <div class="footer_title">Расписание</div>
                    <ul class="footer_list">
                        <li class="tem">Завтрак: 6:00 - 9:00</li>
                        <li  class="tem">Обед: 12:00 - 16:00</li>
                        <li class="tem">Ужин: 18:00 - 21:00</li>
                    </ul> 
                </div>

                <div class="footer_col">
                    <div class="footer_title">Разработчики</div>
                    <ul class="footer_list">
                        <li class="tem">Совет Санжар</li>
                        <li class="tem">Маратов Максат</li>
                        <li class="tem">Акишев Темирлан</li>
                    </ul> 
                </div>

                <div class="footer_col">
                    <div class="footer_title">Соц.сети</div>
                    <ul class="social">
                        <li class="social_item">
                            <a href="https://www.youtube.com/" class="social_link" target="_blank">
                                <img src="images/youtube.png" alt="youtube" class="social_img">
                            </a>
                        </li>
                        <li class="social_item">
                            <a href="https://www.instagram.com/" class="social_link" target="_blank">
                                <img src="images/instagram.png" alt="instagram" class="social_img">
                            </a>
                        </li>
                        <li class="social_item">
                            <a href="https://www.whatsapp.com/" class="social_link" target="_blank">
                                <img src="images/wsap.png" alt="wsap" class="social_img">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
	<?php require('parts/menu.php'); ?>
<hr>


<!--------------------------------------------------------------------------------------------------------------------->
<!--ЗОНА ДЛЯ ПОДКЛЮЧЕНИЯ JAVASCRIPT ФАЙЛОВ К ОСНОВНОЙ СТРАНИЦЕ-->
<script src="js/menuCategory.js"></script>
<script src="js/menuBusket.js"></script>


<!-- MAXZONE -->
    <script src = "js/jquery.fancybox.min.js"></script>
    <script src = "js/slick.min.js"></script>
    <script src = "js/Max_main.js"></script>


</body>
</html>
