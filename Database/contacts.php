<?php 
	require_once('connectDB.php');
?>
	<!-- create php -->
<?php 
	if (isset($_REQUEST['contacts'])) {	/*trigger*/
		$Name = $_REQUEST['Name'];
		$mail = $_REQUEST['Email'];
		$phone = $_REQUEST['Telephone'];
		$msg = $_REQUEST['Message'];

		$sql = "INSERT INTO contacts(Name, mail, number, message) /*sql insert query*/
            VALUES('".$Name."','".$mail."','".$phone."','".$msg."')";

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
