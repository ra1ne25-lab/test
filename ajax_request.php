<?php 

require_once 'config/db_connnection.php';

$conn = OpenCon();

if(isset($_POST['worker']))
{
    $response = "<option selected value=''>Выберите время</option>";

    $worker = $_POST['worker'];
    $service = $_POST['service'];
    $book_date = $_POST['book_date'];

    $book_sql = "SELECT * FROM booking WHERE id_employee=".$worker." AND  book_date='".$book_date."'";

    $book_result = $conn->query($book_sql);

    $rowcount = mysqli_num_rows($book_result);
    if($rowcount > 0)
    {
        $arr = [];
        while($record = $book_result->fetch_assoc())
        {
            $record_time = $record['id_time_slot'];
            array_push($arr,$record_time);
        }
        $time_sql = "SELECT * FROM time_slot WHERE  id_employee=".$worker;
        $time_result = $conn->query($time_sql);
        while($row = $time_result->fetch_assoc())
        {
            if(in_array($row['id'], $arr))
            {
                $response .= "<option value='".$row['id']."' disabled>".$row['time_slot']." | <span> Занято</span></option>";
            }
            else
            {
                $response .= "<option value='".$row['id']."'>".$row['time_slot']."</option>";
            }
        }
    }

    else{
        $time_sql = "SELECT * FROM time_slot WHERE id_employee=".$worker;
        $time_result = $conn->query($time_sql);
        while($row = $time_result->fetch_assoc())
        {
            $response .= "<option value='".$row['id']."'>".$row['time_slot']."</option>";
        }
    }

    echo $response;
}

if(isset($_POST['service_select']))
{
    $response = "<option selected value=''>Выберите мастера</option>";

    $service = $_POST['service_select'];

    $sql = "SELECT * FROM `services`,`position`,`employee` WHERE `position`.`id_position` = `employee`.`id_position` AND `position`.`id_type`=`services`.`id_type` AND `services`.`id_services`=".$service;
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc())
    {
    	$response .= "<option value='".$row['id_employee']."'>".$row['name']."</option>";
    }



    echo $response;
}


?>