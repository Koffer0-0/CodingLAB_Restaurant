<?php 
	require('connectDB.php');
?>
	<!-- create php -->
<?php 
	if (isset($_REQUEST['CREATE'])) {	/*trigger*/
		$Title = $_REQUEST['Title'];	/*variables*/
		$Ingredients = $_REQUEST['dish'];
		$Price = $_REQUEST['Price'];
		$Description = $_REQUEST['Description'];
		$Date = $_REQUEST['Date'];
		$picture = $_FILES['Picture'];
		// picture file properties
		$picture_name = $_FILES['Picture']['name'];
		$picture_tmp = $_FILES['Picture']['tmp_name'];
		$folder = "../images/".$filename; 


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
