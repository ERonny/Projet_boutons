<?php


function userNameExists($username)
{
    require 'connect.php';
    $result;
    $stmt = $database->prepare("SELECT * FROM admins WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    if ($stmt->get_result()->num_rows > 0) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function emailExists($email)
{
    require 'connect.php';
    $result;
    $stmt = $database->prepare("SELECT * FROM admins WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    if ($stmt->get_result()->num_rows > 0) {
        $result = true;
    } else {
        $result = false;
    }

    return $result;
}
function pwdNotMatch($pwd, $pwdrpt)
{
    $result = false;
    if ($pwd !== $pwdrpt) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function userConnect($userId, $pass)
{
    $result = false;
    require 'connect.php';
    $stmt = $database->prepare("SELECT * FROM admins WHERE email=? OR username=?");
    $stmt->bind_param("ss", $userId, $userId);
    $stmt->execute();
    $oper = $stmt->get_result();
    if ($oper->num_rows > 0) {
        $data = $oper->fetch_array();
        $dbpass = $data['userpass'];
        if (password_verify($pass, $dbpass)) {
            $result = true;
        } else {
            $result = false;
        }
    } else {
        $result = false;
    }

    return $result;
}


function creatUser($firstname, $lastname, $email, $username, $pwde)
{
    require 'connect.php';
    $result;
    $stmt = $database->prepare("INSERT INTO admins (firstname, lastname, email, username, userpass) VALUES (?,?,?,?,?)");
    $stmt->bind_param("sssss", $firstname, $lastname, $email, $username, $pwde);
    if ($stmt->execute()) {
        $result = true;
        $stmt->close();
    } else {
        $result = false;
    }
    return $result;
}


function deleteUser($email)

{ 
}
