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
    <link rel = "stylesheet" href = "css/STyle.css">

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
                <a class="tel" href="tel:777777777">+777777777</a>
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
                    <img src="./images/logo_background_2.jpg" alt="background_image" class="background_img">
                    <h1 class="background_text">
                     CODING LAB RESTOURANT
                    </h1>
                    <p class="background_text_content">Лучший ресторан уася. <br> Приходи накормим тебя брат!</p>
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
                    <a href="#" class="reservation">ЗАБРОНИРОВАТЬ</a>
                </div>

                <div class="double_top_right">
                    <div class="slider_item">
                        <img src="images/slider/01.png" alt="slider" class="right_slider">
                        <p class="slider_text"><span>Cookie</span> <span>Pizza</span> <span>Meat</span></p>
                    </div>

                    <div class="slider_item">
                        <img src="images/slider/02.png" alt="slider" class="right_slider">
                        <p class="slider_text"><span>Cookie</span> <span>Pizza</span> <span>Meat</span></p>
                    </div>

                    <div class="slider_item">
                        <img src="images/slider/03.png" alt="slider" class="right_slider">
                        <p class="slider_text"><span>Cookie</span> <span>Pizza</span> <span>Meat</span></p>
                    </div>

                    <div class="slider_item">
                        <img src="images/slider/04.png" alt="slider" class="right_slider">
                        <p class="slider_text"><span>Cookie</span> <span>Pizza</span> <span>Meat</span></p>
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
                     <p class="person_name">Maratov Maksat</p>
                     <p class="person_info">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, facilis?</p>
                </div>
                <div class="block_person">
                    <img src="images/person-1.png" alt="person-1" class="person_photo">
                    <p class="person_name">Akishev Temirlan</p>
                    <p class="person_info">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, facilis?</p>
               </div>
               <div class="block_person">
                <img src="images/person-1.png" alt="person-1" class="person_photo">
                <p class="person_name">Sovet Sanzhar</p>
                <p class="person_info">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, facilis?</p>
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
          <a href="#" class="btn">ЧО ТАМ? ЧО ТАМ?</a>
        </div>
    </section>

    <section class="section-b">

        <div class="container">
            <div class="info_inner">
                <div class="banquet_form">
                    <h2>ПОДРОБНО</h2>
                    <div class="text_block">
                        <p class="banquet_about">Lorem ipsum dolor, de, impumque et maiitibus aut doloru 
                        ex inventore ducimus. Beatae mollitia exercitationem, quam similique,
                        dolor ducimus!</p>
                        <p class="banquet_about">Lorem ipsum dolor, de, impumque et maiitibus aut doloru 
                        ex inventore ducimus. Beatae mollitia exercitationem, quam similique,
                        dolor ducimus!</p>
                    </div>
                </div>
                <div class="banquet_form_block">
                    <form action = "Database/send.php" class = "form_01" method = "post">
                        <h2 class="form_title">ОСТАВИТЬ ЗАЯВКУ</h2>
                        <input type = "text" class = "form_input" placeholder = "Your name:" name = "name">  
                        <input type = "text" class = "form_input" placeholder="Your tel number:" name = "tel_number"> 
                        <!-- Number \ name \ email \ amount of gostei \ type of event \ etc -->
                        <button class = "reservation" type = "submit" name = "ЗАЯВКА">ОТПРАВИТЬ</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
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