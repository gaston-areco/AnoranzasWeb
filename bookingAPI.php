<?php

    include "connection.php";
    session_start();

    if(isset($_POST["arriveDate"]) && isset($_POST["departureDate"])) {
        $sql = "select * from usuario where user ='" . $_POST["user"] . "' AND password='" . $_POST["password"] . "'";
        $res = mysqli_query($mysqli, $sql);
        if (mysqli_num_rows($res) > 0) {
            $row = mysqli_fetch_object($res);
            $sql = "insert into booking(arriveDate, departureDate, roomType, cardNumber, cardOwner, cardDate, idUsuario) values ('" . $_POST["arriveDate"] ."','" . $_POST["departureDate"] . "','" . $_POST["roomType"] . "','" . $_POST["cardNumber"] . "','" . $_POST["cardOwner"] . "','" . $_POST["cardDate"] . "','" . $row->idUsuario . "')"; 
            $res = mysqli_query($mysqli, $sql);
            print_r(true);
        } else {
            print_r(false);
        }
    }
    
