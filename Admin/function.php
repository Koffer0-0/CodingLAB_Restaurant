<?php
require ('../Database/showOOP.php');

function init() {
    $obj = new Show();
    $conn = $obj->connect();
    $sql = "SELECT id, Title FROM recieps";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $out = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $out[$row["id"]] = $row;
        }
        echo json_encode($out);
    }
    else {
        echo "0";
    }
    mysqli_close($conn);
}
function loadGoods() {
    $obj = new Show();
    $conn = $obj->connect();
    $sql = "SELECT * FROM recieps";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $out = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $out[$row["id"]] = $row;
        }
        echo json_encode($out);
    }
    else {
        echo "0";
    }
    mysqli_close($conn);
}
function selectOneGoods() {
    $obj = new Show();
    $conn = $obj->connect();
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
    mysqli_close($conn);
}

function updateGoods() {
    $obj = new Show();
    $conn = $obj->connect();
    $id = $_POST['id'];
    $category = $_POST['category'];
    $pic = $_POST['pic'];
    $title = $_POST['title'];
    $price = $_POST['price'];
    $descr = $_POST['descr'];

    $sql = "UPDATE recieps SET Category = '$category',Picture = '$pic',Title = '$title',Price = '$price', Description = '$descr' WHERE id = '$id'";
    if (mysqli_query($conn, $sql)) {
        echo "success!";
    } else {
        echo "error";
    }
    mysqli_close($conn);
}

function newGoods() {
    $obj = new Show();
    $conn = $obj->connect();
    $category = $_POST['category'];
    $pic = $_POST['pic'];
    $title = $_POST['title'];
    $price = $_POST['price'];
    $descr = $_POST['descr'];

    $sql = "INSERT INTO recieps(Category, Picture, Title, Price, Description) 
            VALUES ('$category','$pic','$title','$price','$descr')";
    if (mysqli_query($conn, $sql)) {
        echo "success adding!";
    } else {
        echo "error";
    }
    mysqli_close($conn);
}

function deleteGoods() {
    $obj = new Show();
    $conn = $obj->connect();
    $id = $_POST['id'];

    $sql = "DELETE FROM recieps WHERE id = '$id'";
    if (mysqli_query($conn, $sql)) {
        echo "success deleted!";
    } else {
        echo "error";
    }
    mysqli_close($conn);
}
?>

