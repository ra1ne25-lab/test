<?php

@ob_start();
session_start();
include('db_conn.php');
if(isset($_POST['login_btn']))
{
    //SELECT * FROM users WHERE username='$username' AND `password`=SHA1(CONCAT((SELECT `salt` FROM users WHERE username=$username), '$pswd'))
    $username   =   $_POST['username'];
    $name   =   $_POST['name'];
    $pswd       =   $_POST['pswd'];
    $sql        =   "SELECT * FROM users WHERE username='$username' AND `password`=SHA1(CONCAT((SELECT `salt` FROM users WHERE username='$username'), '$pswd'))";
    $res        =   $conn->query($sql);
    $total_rec  =   $res->rowCount();
    if($total_rec>0)
    {
        while($row  =   $res->fetch()){
            echo"<script>alert('Успешный вход')</script>";
            // session_start();
            $_SESSION['status'] =   'login';
            $_SESSION['user_name']  =   $row['username'];
            $_SESSION['user_id']    =   $row['id'];
            $_SESSION['name1']  =   $row['name'];
        }

         echo"<script>window.location.href = 'index.php';</script>";
    }
    else
    {
        echo"<script>alert('Произошла какая-то ошибка!')</script>";
        echo"<script>window.location.href = 'index.php';</script>";
    }
    // $sql = "SELECT `salt` FROM users WHERE username='$username'";
    // $res = $conn->query($sql);
    // if ($res->rowCount() > 0) {
    //     $row = $res->fetch();
    //     $salt = $row['salt'];
        
    // } else {
    //     echo"<script>alert('Пароль либо логин неверны')</script>";
    //     echo"<script>window.location.href = 'index.php';</script>";
    // }
}
?>