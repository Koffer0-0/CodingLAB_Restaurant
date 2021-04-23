<?php 
    require_once('connectDB.php');
?>
<?php
    if (isset($_REQUEST['DELETE'])) {   /*delete trigger*/
        $Title = $_REQUEST['Title'];

        $sql = "DELETE FROM recieps WHERE Title= '".$Title."'";     /*delete query*/

        echo "<br>";
        if (mysqli_query($connect, $sql)) {
            header("Location: ../index.php");   /*go back at main page*/
        } else {
            echo "It not consist";      /*if title does not exist*/
            echo mysqli_error($connect);
        }
    }
    else {
        header("Location: ../index.php");   /*go back at main page*/
    }

?>
