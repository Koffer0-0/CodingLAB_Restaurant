
<?php
    require_once('../Database/connectDB.php');
    $data = $_REQUEST;
    
    function captcha_show() {
        $questions = array (
            1 => '2 * 3',
            2 => '14 + 43',
            3 => '2 + 3',
            4 => '15 + 14',
            5 => '42 - 10',
            6 => '33 - 5',
            7 => '15 / 5'
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
            1 => '6',
            2 => '57',
            3 => '5',
            4 => '29',
            5 => '32',
            6 => '28',
            7 => '3'
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
            echo '<div id = "errors" style = "color: rgb(25, 58, 39); font-size: 50px; text-align: center;">'.array_shift($errors).'</div><hr>';
        }

    }
?>
