<?php 
    require_once('connectDB.php');
?>
<?php
    if (isset($_REQUEST['EDIT'])) {     /*trigger*/
        $Title = $_REQUEST['Title'];    /*variables*/
        $Ingredients = $_REQUEST['dish'];
        $Price = $_REQUEST['Price'];
        $Description = $_REQUEST['Description'];
        $Date = $_REQUEST['Date'];
        $picture = $_FILES['Picture'];
        // for image
        $picture_name = $_FILES['Picture']['name'];
        $picture_tmp = $_FILES['Picture']['tmp_name'];
        $folder = "../images/".$filename; 

        /*edit sql code*/
        $sql = "UPDATE `recieps` SET `Title`='".$Title."',`Ingredients`='".$Ingredients."',`Price`='".$Price."',`Description`='".$Description."',`Data`='".$Date."', `Picture`='".$picture_name."'WHERE `Title`='".$Title."'";

        $result = mysqli_query($connect,$sql);

        echo "<br>";

        if ($result === false) {    /*checker*/
            echo mysqli_error($connect);
        } else {
            header("Location: ../index.php"); /*go back at main page*/
        }
    }
    else {
        header("Location: ../index.php");   /*go back at main page*/
    }
?>