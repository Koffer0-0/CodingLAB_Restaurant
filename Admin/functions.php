<?php

function loadGoods() {
    require_once('../Database/connectOOP.php');
    $obj = new Show();
    $reciepe = $obj->select_table('recieps');
}