
<?php
    require ('../Database/connectDB.php');

    $data = $_REQUEST;
    if (isset($data['log'])) {
        $user = R::findOne('users', 'login = ?', array($data['Name']));
        if ($user) {
            //логин существует
            if (password_verify($data['Password'], $user->password)) {
                //если пароль совпадает, то нужно авторизовать пользователя
                $_SESSION['user'] = $user;
                if ($_SESSION['user']->login == "Tima") {
                    header('Location: ../Admin/index.php');
                } else {
                    header('Location: ../index.php');
                }
            } else {
                $errors[] = 'Password are inccorect!';
            }

        } else {
           $errors[] = 'Login  inccorect!';
        }
        
        if (!empty($errors)) {
            echo '<div id = "errors" style = "color: rgb(255, 58, 39); font-size: 50px; text-align: center;">'.array_shift($errors).'</div><hr>';
        }
    }
?>
