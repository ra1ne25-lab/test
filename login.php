<?php

@ob_start();
session_start();
include('db_conn.php');
if(isset($_POST['login_btn']))
{
    $username   =   $_POST['username'];
    $name   =   $_POST['name'];
    $pswd       =   $_POST['pswd'];
    $enc_psw    =   md5($pswd);
    $sql        =   "SELECT * FROM users WHERE username='$username' AND `password`='$enc_psw'";
    $res        =   $conn->query($sql);
    $total_rec  =   $res->rowCount();
    if($total_rec>0)
    {
        while($row  =   $res->fetch()){
            echo"<script>alert('Успешный вход')</script>";
            // session_start();
            $_SESSION['status'] =   'login';
            $_SESSION['user_name']  =   $row['username'];
            $_SESSION['name1']  =   $row['name'];
        }

         echo"<script>window.location.href = 'index.php';</script>";
    }
    else
    {
        echo"<script>alert('Произошла какая-то ошибка!')</script>";
        echo"<script>window.location.href = 'index.php';</script>";
    }
}
?>