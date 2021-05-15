<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>

    <!--для подключения других файлов-->
    <link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel = "stylesheet" href = "STYLE.css">
</head>

<body>
	<!-- <header> -->
    
    <section class = "main">
        
        <div class = "side col-sm-2">
            <!-- <nav> -->
            <?php require('sidebar.php'); ?>
        </div>
        
        <div class = "head col-sm-12" >
            <!-- <nav> -->
            <?php require('header.php'); ?>
            <?php require('panel.php'); ?>
        </div>
    </section>

<!-- <footer> -->
	<?php require('footer.html'); ?>
<!-- </footer> -->



<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src = "../js/sidebar.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html>
