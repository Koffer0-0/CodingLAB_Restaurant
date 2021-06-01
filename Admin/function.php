<?php
require_once ('../Database/showOOP.php');


function loadGoods() {
    $conn = connect();
    $sql = "SELECT * FROM recieps";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $out = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $out[$row["id"]] = $row;
        }
        json_encode($out);
    }
    else {
        echo "0";
    }
    mysqli_close($result);
}

function selectOneGoods() {
    $conn = connect();
    $id = $_POST['gid'];
    $sql = "SELECT * FROM recieps WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        echo json_encode($row);
    }
    else {
        echo "0";
    }
    mysqli_close($result);
}
?>

