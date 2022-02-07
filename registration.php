<?php
include('db_conn.php');
if(isset($_POST['register_btn']))
{
    $username   =   $_POST['username'];
    $surname    =   $_POST['surname'];
    $name       =   $_POST['name'];
    $patronymic =   $_POST['patronymic'];
    $email      =   $_POST['email'];
    $phno       =   $_POST['phno'];
    $pswd       =   $_POST['pswd'];
    $cnfrm_pswd =   $_POST['cnfrm_pswd'];
    // $enc_psw    =   md5($pswd);
    if($pswd==$cnfrm_pswd)
    {
        $sql        =   "SELECT * FROM users WHERE username='$username'";
        $res        =   $conn->query($sql);
        $total_rec  =   $res->rowCount();
        if($total_rec>0){
            echo"<script>alert('Имя пользователя уже существует!')</script>";
            echo"<script>window.location.href = 'index.php';</script>";
            exit();    
        }
        $sql = "
            SET @salt = SUBSTRING(SHA1(RAND()), 1, 6);
            INSERT INTO users (username, surname, `name`, patronymic, email, phone, salt, `password`)
            VALUES ('$username', '$surname', '$name', '$patronymic', '$email', '$phno', @salt, SHA1(CONCAT(@salt, '$pswd')))";
        $conn->exec($sql);
        echo"<script>alert('Вы успешно зарегистрировались!')</script>";
        echo"<script>window.location.href = 'index.php';</script>";
    }
    else if($pswd!=$cnfrm_pswd)
    {
        echo"<script>alert('Пароль не подходит!')</script>";
        echo"<script>window.location.href = 'index.php';</script>";

    }
}
?>