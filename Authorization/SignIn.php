<?php
    if (isset($_REQUEST['log'])) {
        session_start();
        require_once('../Database/connectDB.php');

        $Name = $_REQUEST['Login'];
        $password = $_REQUEST['Password'];

        $check_user = mysqli_query($connect, "SELECT * FROM `Users` WHERE `Name` = '$Name' AND `Password` = '$password'");
        
        if (empty($Name)) {
            $_SESSION['message'] = 'Please enter login!';
            header('Location: loginpanel.php');
        } else if (mysqli_num_rows($check_user) > 0) {

            $user = mysqli_fetch_assoc($check_user);

            $_SESSION['user'] = [
                "id" => $user['id'],
                "Name" => $user['Name'],
                "email" => $user['email']
            ];

            header('Location: ../index.php');

        } else {
            $_SESSION['message'] = 'Login or password are inccorect!';
            header('Location: loginpanel.php');
        }
    }
?>
