
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
    require_once('../Database/connectDB.php');
    $data = $_REQUEST;
    
    function captcha_show() {
        $questions = array (
            1 => 'Capital city of QAZAQSTAN?',
            2 => 'Capital city of CANADA?',
            3 => '2 + 3',
            4 => '15 + 14',
            5 => '42 - 10',
            6 => '33 - 5',
            7 => '15 / 5',
            8 => '2 * 3',
            9 => '14 + 88'
        );
        $num = mt_rand(1, count($questions));
        $_SESSION['captcha'] = $num;
        echo $questions[$num];
    }
    //если кликнули на button
    if (isset($data['reg'])) {
           
            // проверка формы на пустоту полей
        $errors = array();
        if (trim($data['Name']) == '') {
            $errors[] = 'Please Enter login!';
        }

        if (trim($data['email']) == '') {
            $errors[] = 'Please Enter e-mail!';
        }

        if ($data['Password'] == '') {
            $errors[] = 'Please Enter password!';
        }

        if ($data['Password2'] != $data['Password']) {
            $errors[] = 'Repeated password is incorrect!';
        }

            //проверка на существование одинакового логина
        if (R::count('users', "login = ?", array($data['Name'])) > 0) {
            $errors[] = 'User with this login already exist!';
        }
    
            //проверка на существование одинакового email
        if (R::count('users', "email = ?", array($data['email'])) > 0) {
            $errors[] = 'User with this e-mail already exist!';
        }

        //проверка капчи
        $answers = array (
            1 => 'Astana',
            2 => 'Ottawa',
            3 => '5',
            4 => '29',
            5 => '32',
            6 => '28',
            7 => '3',
            8 => '6',
            9 => '102'
        );
        
        if ($_SESSION['captcha'] != array_search(mb_strtolower($_POST['captcha']), $answers)) {
            $errors[] = 'CAPTCHA IS INCORRECT!';
        }
        
        if (empty($errors)) {
            //ошибок нет, теперь регистрируем
            $user = R::dispense('users');
            $user->login = $data['Name'];
            $user->email = $data['email'];
            $user->password = password_hash($data['Password'], PASSWORD_DEFAULT);
            R::store($user);
            echo '<div style = "color: green;"> Wellcome! </div><hr>';
            header('Location: ../index.php');
        } else {
            echo '<div id = "errors" style = "color: rgb(255, 58, 39); font-size: 50px; text-align: center;">'.array_shift($errors).'</div><hr>';
        }

    }
?>

<main class = "container">
    <section class = "row"> 
        <form action = "registration.php" method = "post">
            <label for = "Name">Name</label>
            <input type = "Name" id = "Name" class = "form-control" name = "Name" value = "<?php echo @$data['Login']; ?>">

            <label for = "email">E-mail</label>
            <input type = "email" id = "email" class = "form-control" name = "email" value = "<?php echo @$data['email']; ?>">

            <label for = "Password">Password</label>
            <input type = "password" id = "Password" class = "form-control" name = "Password" value = "<?php echo @$data['Password']; ?>">

            <label for = "Password2">Repeat-Password</label>
            <input type = "password" id = "Password2" class = "form-control" name = "Password2" value = "<?php echo @$data['Password2']; ?>">

            <strong><?php captcha_show(); ?></strong>
            <input type = "text" name = "captcha" class = "form-control"> <br>

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
