<?php
require_once 'config/db_connnection.php';
$conn = OpenCon();

if(isset($_POST['book_session']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $service_select = $_POST['service_select'];
    $worker_select = $_POST['worker_select'];
    $time_slot_select = $_POST['time_slot_select'];
    $message = $_POST['message'];
    $sql = "INSERT INTO `booking`(`worker_id`, `time_slot_id`, `visitor_name`, `visitor_email`, `visitor_ph`,
     `service_id`, `book_date`) VALUES ('$worker_select','$time_slot_select','$name','$email','$phone',
     '$service_select','$date')";

    $conn->query($sql);

    echo"<script>alert('Забронировано успешно!')</script>";

    echo"<script>window.location.href = 'index.php';</script>";
}

?>