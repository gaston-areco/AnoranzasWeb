<?php

    include "connection.php";
    session_start();

    if(isset($_POST["user"]) && isset($_POST["password"])) {
        $sql = "select * from usuario where user ='" . $_POST["user"] . "' AND password='" . $_POST["password"] . "'";
        $res = mysqli_query($mysqli, $sql);
        if (mysqli_num_rows($res) > 0) {
            $_SESSION["auth"] = true;
            $_SESSION["user"] = $_POST["user"];
            $row = mysqli_fetch_object($res);
            $_SESSION["email"] = $row->email;
            print_r(true);
        } else {
            $_SESSION["auth"] = false;
            print_r(false);
        }
    }
    else
    {
        if (isset($_POST["newUser"]) && isset($_POST["newPassword"]) && isset($_POST["newEmail"]))
        {
            $sql = "insert into usuario(user, password, email) values ('" . $_POST["newUser"] ."','" . $_POST["newPassword"] . "','" . $_POST["newEmail"] . "')";
            $res = mysqli_query($mysqli, $sql);
            print_r(true);
        }
    }
