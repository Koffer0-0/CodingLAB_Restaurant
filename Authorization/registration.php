<!-- Bootstrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<title> Registration </title>
<style>
    body {
        background-color: rgba(240, 150, 110, 1.0);
    }
    main { 
        height: 80vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    button {
        margin-top: 15px;
    }

</style>
<!-- registration form -->
<?php
    session_start();
    if ($_SESSION['user']) {
        header('Location: ../index.php');
    }
?>
<main class = "container">
    <section class = "row"> 
        <form action = "Signup.php" method = "post">
            <label for = "Name">Name</label>
            <input type = "Name" id = "Name" class = "form-control" name = "Name">

            <label for = "email">E-mail</label>
            <input type = "email" id = "email" class = "form-control" name = "email">

            <label for = "Password">Password</label>
            <input type = "password" id = "Password" class = "form-control" name = "Password">

            <label for = "Password2">Repeat-Password</label>
            <input type = "password" id = "Password2" class = "form-control" name = "Password_repeat">

            <button type = "submit" class = "btn bg-success text-white w-100" name = "reg">Register</button>
            <p>
                Have an account? <a href = "loginpanel.php">Sign in</a>!
            </p>
            <?php
                if ($_SESSION['message']) {
                    echo '<p class = "msg"> ' . $_SESSION['message'].'</p>';
                }
                unset($_SESSION['message']);
            ?>
        </form>
    </section>
    
</main>
