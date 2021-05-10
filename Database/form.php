<?php 
	require('connectDB.php');
?>
	<!-- create php -->
<?php 
	if (isset($_REQUEST['ЗАЯВКА'])) {	/*trigger*/
		$Name = $_REQUEST['name'];	/*variables*/
		$Phone = $_REQUEST['tel_number'];

		$sql = "INSERT INTO recieps(Title, Description, Data, Picture, Price, Ingredients) /*sql insert query*/
            VALUES('".$Title."','".$Description."','".$Date."', '".$picture_name."','".$Price."','".$Ingredients."')";

        $result = mysqli_query($connect, $sql);

        if ($result === false) {	/*check for connection*/
            echo mysqli_error($connect);
        } else {
            $id = mysqli_insert_id($connect);
           	header("Location: ../index.php");	/*go back at main page*/
        }
	} else {
		header("Location: ../index.php");	/*also go back*/
	}
?>
