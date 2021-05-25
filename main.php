<!DOCTYPE html>
<html lang = "en">
<head>
  <meta charset = "UTF-8">
  <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
  <title>BeshBARmak</title>

  <!--для подключения других файлов-->
  <link rel="stylesheet" href="CSS.css">

     <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
</head>
<body>

<main>
  <section class = "container">
    
    <?php /*When user logined it show this admin panel*/
      session_start();
      if ($_SESSION['user']['Name'] == "Tima") {
    ?>
      <!-- add here at the future to go admin panel -->
      <a href = "Admin">Go to template of admin panel
      </a>
    <?php } ?> <!-- close block -->

    <div class = "row display-inlineblock">
        <div class = "col-md-12 col-sm-10 col-12 display-block">
                <ul class="selecton brdr-b-primary mb-70 d-flex d-inline-block justify-content-center">
                        <li><a class="active" href="#" data-select="*"><b>ALL</b></a></li>
                        <li><a href="#" data-select="pilaf"><b>pilaf</b></a></li>
                        <li><a href="#" data-select="lagman"><b>lagmans</b></a></li>
                        <li><a href="#" data-select="drink"><b>DRINK</b></a></li>
                        <li><a href="#" data-select="сonfection"><b>Confection</b></a></li>
                </ul>
        </div><!--col-sm-12-->
    </div><!--row-->
    <!-- show info from our database(create an object) -->
    <?php
      require_once('Database/ShowOOP.php');
      $obj = new Show();
      $reciepe = $obj->select_table('recieps');
    ?>
    <div class = "row">
    <?php 
      for ($i = 0; $i < count($reciepe); $i++) { /*begin loop*/
      
        echo '<div class = "col-md-6 food-menu '.$reciepe[$i][6].'">';
        ?> <div class="sided-90x mb-30 ">
                        <div class="s-left"><?php echo '<img class="br-3" alt = "Menu Image" src = "images/'.$reciepe[$i][4].'">'?></div><!--s-left-->
                        <div class="s-right">
                            <h5 class="mb-10"><b><?php echo $reciepe[$i][1]; ?></b><b class="color-primary float-right"><?php echo $reciepe[$i][5]; ?> tg</b></h5> 
                            <p class="pr-70"><?php echo $reciepe[$i][2]; ?><b class="float-right"><img id="image" class="cart" src="images/cart.png" onClick="imgsrc();"></b> </p>
                        </div><!--s-right-->
                </div><!-- sided-90x -->
        </div><!-- food-menu -->
     
    <?php } ?> <!-- end loop -->
  </div>
    <div><h6 class="center-text mt-40 mt-sm-20 mb-30"><a href="#" class="btn-primaryc plr-25"><b>BUY</b></a></h6></div>       
    </section><!-- container -->
</main>


<!-- footer where coontain helpful information -->

<!-- SCRIPT ALWAYS MUST BE AFTER THE HTML CONTENT -->
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script language = "javascript">
        var i = 0;
        var image = document.getElementById("image");
        // Добавьте свои картинки в массив через запятую
        var imgs = new Array('images/cart.png','images/trush.png');
        function imgsrc() {
            i++;i%=imgs.length;
            image.src = imgs[i];
        }
</script>

<script type = "text/javascript" src = "JavaScript.js"></script>
</body>
</html>







