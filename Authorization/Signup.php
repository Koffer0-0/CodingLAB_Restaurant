
<?php
    if (isset($_REQUEST['reg'])) {
        session_start();
        require_once('../Database/connectDB.php');

        $Name = $_POST['Name'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['Password'];
        $repeat_pass = $_REQUEST['Password_repeat'];
        if (empty($Name) or empty($email)) {
            $_SESSION['message'] = 'Enter login or email please!';
            header('Location: registration.php');
        }
        else if ($password === $repeat_pass) {

            mysqli_query($connect, "INSERT INTO `Users` (`id`, `Name`, `email`, `Password`) VALUES (NULL, '$Name', '$email', '$password')");

            $_SESSION['message'] = 'Wellcome!';
            header('Location: ../index.php');


        } else {
            $_SESSION['message'] = 'Passwords are different!';
            header('Location: registration.php');
        }
    }
?>
