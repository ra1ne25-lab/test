<?php
require_once 'config/db_connnection.php';


$conn = OpenCon();

if(isset($_POST['book_session']))
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $service_select = $_POST['service_select'];
    $worker_select = $_POST['worker_select'];
    $time_slot_select = $_POST['time_slot_select'];
    $message = $_POST['message'];
    $sql = "INSERT INTO `booking`(`id_employee`, `id_time_slot`, `visitor_name`, `visitor_email`, `visitor_ph`,
     `id_services`, `book_date`) VALUES ('$worker_select','$time_slot_select','$name','$email','$phone',
     '$service_select','$date')";

    $conn->query($sql);
}
    // $sql = "SELECT employee.surname FROM employee WHERE employee.id_employee = $worker_select";
    // $result = $conn->query($sql);
    // $row = $result->fetch_assoc();
	  // $worker_text = $row[0];


    $query = mysqli_query($conn, "SELECT employee.surname FROM employee WHERE employee.id_employee = $worker_select");
    $employee_text = mysqli_fetch_all($query);
    
    $query = mysqli_query($conn, "SELECT services.name FROM services WHERE services.id_services = $service_select");
    $service_text = mysqli_fetch_all($query);

    $query = mysqli_query($conn, "SELECT time_slot.time_slot FROM time_slot WHERE time_slot.id = $time_slot_select");
    $time_slot_select_text = mysqli_fetch_all($query);



    // $sql = "SELECT services.name FROM services WHERE services.id_services = $service_select";
    // $result = $conn->query($sql);
	  // $service_text = ($result->fetch_assoc())['id_services'];

    // echo"<script>alert('Забронировано успешно!')</script>";

    // echo"<script>window.location.href = 'index.php';</script>";


 $to = $email;
 $subject = 'Запись в салон-красоты';
//  $sql = "SELECT employee.surname, worker_id FROM booking JOIN employee ON booking.worker_id = employee.id_employee";
//  $name = htmlspecialchars($_POST['name']);
//  $name = urldecode($name);
//  $name = trim($name);

//  $email= htmlspecialchars($_POST['email']);
//  $email = urldecode($email);
//  $email = trim($email);

//  $phone = htmlspecialchars($_POST['phone']);
//  $phone = urldecode($phone);
//  $phone = trim($phone);

//  $date = htmlspecialchars($_POST['date']);
//  $date = urldecode($date);
//  $date = trim($date);

//  $service_select = htmlspecialchars($_POST['service_select']);
//  $service_select = urldecode($service_select);
//  $service_select = trim($service_select);

//  $worker_select = htmlspecialchars($_POST['worker_select']);
//  $worker_select  = urldecode($worker_select);
//  $worker_select  = trim($worker_select);

//  $time_slot_select = htmlspecialchars($_POST['time_slot_select']);
//  $time_slot_select  = urldecode($time_slot_select);
//  $time_slot_select  = trim($time_slot_select);
 
 $message = htmlspecialchars($_POST['message']);
 $message  = urldecode($message);
 $message = trim($message);

 $from = "leha.kosovskiy@mail.ru";
 $message = "
 
 <!DOCTYPE HTML PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional //EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xmlns:v=\"urn:schemas-microsoft-com:vml\" xmlns:o=\"urn:schemas-microsoft-com:office:office\">
<head>
<!--[if gte mso 9]>
<xml>
  <o:OfficeDocumentSettings>
    <o:AllowPNG/>
    <o:PixelsPerInch>96</o:PixelsPerInch>
  </o:OfficeDocumentSettings>
</xml>
<![endif]-->
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta name=\"x-apple-disable-message-reformatting\">
  <!--[if !mso]><!--><meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"><!--<![endif]-->
  <title></title>
  
    <style type=\"text/css\">
      table, td { color: #000000; } a { color: #0000ee; text-decoration: underline; } @media (max-width: 480px) { #u_content_image_2 .v-src-width { width: auto !important; } #u_content_image_2 .v-src-max-width { max-width: 60% !important; } #u_content_text_1 .v-container-padding-padding { padding: 30px 30px 30px 20px !important; } #u_content_text_3 .v-container-padding-padding { padding: 30px 30px 80px 20px !important; } #u_content_text_8 .v-container-padding-padding { padding: 30px 30px 80px 20px !important; } #u_content_text_5 .v-text-align { text-align: center !important; } #u_content_text_6 .v-text-align { text-align: center !important; } }
@media only screen and (min-width: 570px) {
  .u-row {
    width: 550px !important;
  }
  .u-row .u-col {
    vertical-align: top;
  }

  .u-row .u-col-50 {
    width: 275px !important;
  }

  .u-row .u-col-100 {
    width: 550px !important;
  }

}

@media (max-width: 570px) {
  .u-row-container {
    max-width: 100% !important;
    padding-left: 0px !important;
    padding-right: 0px !important;
  }
  .u-row .u-col {
    min-width: 320px !important;
    max-width: 100% !important;
    display: block !important;
  }
  .u-row {
    width: calc(100% - 40px) !important;
  }
  .u-col {
    width: 100% !important;
  }
  .u-col > div {
    margin: 0 auto;
  }
}
body {
  margin: 0;
  padding: 0;
}

table,
tr,
td {
  vertical-align: top;
  border-collapse: collapse;
}

p {
  margin: 0;
}

.ie-container table,
.mso-container table {
  table-layout: fixed;
}

* {
  line-height: inherit;
}

a[x-apple-data-detectors='true'] {
  color: inherit !important;
  text-decoration: none !important;
}

</style>
  
  

<!--[if !mso]><!--><link href=\"https://fonts.googleapis.com/css?family=Crimson+Text:400,700&display=swap\" rel=\"stylesheet\" type=\"text/css\"><!--<![endif]-->

</head>

<body class=\"clean-body u_body\" style=\"margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #fbeeb8;color: #000000\">
  <!--[if IE]><div class=\"ie-container\"><![endif]-->
  <!--[if mso]><div class=\"mso-container\"><![endif]-->
  <table style=\"border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 320px;Margin: 0 auto;background-color: #fbeeb8;width:100%\" cellpadding=\"0\" cellspacing=\"0\">
  <tbody>
  <tr style=\"vertical-align: top\">
    <td style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top\">
    <!--[if (mso)|(IE)]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td align=\"center\" style=\"background-color: #fbeeb8;\"><![endif]-->
    

<div class=\"u-row-container\" style=\"padding: 0px;background-color: #ffffff\">
  <div class=\"u-row\" style=\"Margin: 0 auto;min-width: 320px;max-width: 550px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;\">
    <div style=\"border-collapse: collapse;display: table;width: 100%;background-color: transparent;\">
      <!--[if (mso)|(IE)]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding: 0px;background-color: #ffffff;\" align=\"center\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"width:550px;\"><tr style=\"background-color: #ffffff;\"><![endif]-->
      
<!--[if (mso)|(IE)]><td align=\"center\" width=\"550\" style=\"width: 550px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;\" valign=\"top\"><![endif]-->
<div class=\"u-col u-col-100\" style=\"max-width: 320px;min-width: 550px;display: table-cell;vertical-align: top;\">
  <div style=\"width: 100% !important;\">
  <!--[if (!mso)&(!IE)]><!--><div style=\"padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;\"><!--<![endif]-->
  
<table style=\"font-family:arial,helvetica,sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
  <tbody>
    <tr>
      <td class=\"v-container-padding-padding\" style=\"overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;\" align=\"left\">
        
  <h1 class=\"v-text-align\" style=\"margin: 0px; color: #3598db; line-height: 140%; text-align: center; word-wrap: break-word; font-weight: normal; font-family: arial,helvetica,sans-serif; font-size: 30px;\">
    <strong>Nail.Sun</strong>
  </h1>

      </td>
    </tr>
  </tbody>
</table>

  <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
  </div>
</div>
<!--[if (mso)|(IE)]></td><![endif]-->
      <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
    </div>
  </div>
</div>



<div class=\"u-row-container\" style=\"padding: 0px;background-color: transparent\">
  <div class=\"u-row\" style=\"Margin: 0 auto;min-width: 320px;max-width: 550px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;\">
    <div style=\"border-collapse: collapse;display: table;width: 100%;background-color: transparent;\">
      <!--[if (mso)|(IE)]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding: 0px;background-color: transparent;\" align=\"center\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"width:550px;\"><tr style=\"background-color: transparent;\"><![endif]-->
      
<!--[if (mso)|(IE)]><td align=\"center\" width=\"550\" style=\"width: 550px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\" valign=\"top\"><![endif]-->
<div class=\"u-col u-col-100\" style=\"max-width: 320px;min-width: 550px;display: table-cell;vertical-align: top;\">
  <div style=\"width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\">
  <!--[if (!mso)&(!IE)]><!--><div style=\"padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\"><!--<![endif]-->
  
<table style=\"font-family:arial,helvetica,sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
  <tbody>
    <tr>
      <td class=\"v-container-padding-padding\" style=\"overflow-wrap:break-word;word-break:break-word;padding:20px;font-family:arial,helvetica,sans-serif;\" align=\"left\">
        
  <table height=\"0px\" align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 0px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%\">
    <tbody>
      <tr style=\"vertical-align: top\">
        <td style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%\">
          <span>&#160;</span>
        </td>
      </tr>
    </tbody>
  </table>

      </td>
    </tr>
  </tbody>
</table>

  <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
  </div>
</div>
<!--[if (mso)|(IE)]></td><![endif]-->
      <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
    </div>
  </div>
</div>



<div class=\"u-row-container\" style=\"padding: 0px;background-color: transparent\">
  <div class=\"u-row\" style=\"Margin: 0 auto;min-width: 320px;max-width: 550px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;\">
    <div style=\"border-collapse: collapse;display: table;width: 100%;background-color: transparent;\">
      <!--[if (mso)|(IE)]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding: 0px;background-color: transparent;\" align=\"center\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"width:550px;\"><tr style=\"background-color: #ffffff;\"><![endif]-->
      
<!--[if (mso)|(IE)]><td align=\"center\" width=\"542\" style=\"width: 542px;padding: 0px;border-top: 4px solid #d9d8d8;border-left: 4px solid #d9d8d8;border-right: 4px solid #d9d8d8;border-bottom: 4px solid #d9d8d8;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\" valign=\"top\"><![endif]-->
<div class=\"u-col u-col-100\" style=\"max-width: 320px;min-width: 550px;display: table-cell;vertical-align: top;\">
  <div style=\"width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\">
  <!--[if (!mso)&(!IE)]><!--><div style=\"padding: 0px;border-top: 4px solid #d9d8d8;border-left: 4px solid #d9d8d8;border-right: 4px solid #d9d8d8;border-bottom: 4px solid #d9d8d8;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\"><!--<![endif]-->
  
<table id=\"u_content_image_2\" style=\"font-family:arial,helvetica,sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
  <tbody>
    <tr>
      <td class=\"v-container-padding-padding\" style=\"overflow-wrap:break-word;word-break:break-word;padding:40px 10px 10px;font-family:arial,helvetica,sans-serif;\" align=\"left\">
        
<table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
  <tr>
    <td class=\"v-text-align\" style=\"padding-right: 0px;padding-left: 0px;\" align=\"center\">
      
      <img align=\"center\" border=\"0\" src=\"https://cdn.templates.unlayer.com/assets/1638205026461-check-cross-symbols-with-opening-symbol-3d-rendering.png\" alt=\"Wrong Email\" title=\"Wrong Email\" style=\"outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 30%;max-width: 159px;\" width=\"159\" class=\"v-src-width v-src-max-width\"/>
      
    </td>
  </tr>
</table>

      </td>
    </tr>
  </tbody>
</table>

<table id=\"u_content_text_1\" style=\"font-family:arial,helvetica,sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
  <tbody>
    <tr>
      <td class=\"v-container-padding-padding\" style=\"overflow-wrap:break-word;word-break:break-word;padding:10px 30px 7px 40px;font-family:arial,helvetica,sans-serif;\" align=\"left\">
        
  <div class=\"v-text-align\" style=\"color: #333333; line-height: 140%; text-align: left; word-wrap: break-word;\">
    <p style=\"font-size: 14px; line-height: 140%;\"><span style=\"font-family: 'Crimson Text', serif; font-size: 14px; line-height: 19.6px;\"><strong><span style=\"font-size: 22px; line-height: 30.8px;\">Здравствуйте!</span></strong></span></p>
<p style=\"font-size: 14px; line-height: 140%;\">&nbsp;</p>
<p style=\"font-size: 14px; line-height: 140%;\"><span style=\"font-size: 18px; line-height: 25.2px; font-family: 'Crimson Text', serif;\">Вы успешно забронировали процедуру в нашем салоне-красоты.</span></p>
<p style=\"font-size: 14px; line-height: 140%;\">&nbsp;</p>
<p style=\"line-height: 140%; font-size: 14px;\"><span style=\"font-family: Crimson Text, serif;\"><span style=\"font-size: 18px; line-height: 25.2px;\">Ваше имя: $name </span></span></p>
<p style=\"line-height: 140%; font-size: 14px;\"><span style=\"font-family: Crimson Text, serif;\"><span style=\"font-size: 18px; line-height: 25.2px;\">Ваш E-mail:  $email</span></span></p>
<p style=\"line-height: 140%; font-size: 14px;\"><span style=\"font-family: Crimson Text, serif;\"><span style=\"font-size: 18px; line-height: 25.2px;\">Ваш № телефона: $phone</span></span></p>
<p style=\"line-height: 140%; font-size: 14px;\">&nbsp;</p>
<p style=\"line-height: 140%; font-size: 14px;\"><span style=\"font-family: Crimson Text, serif;\"><span style=\"font-size: 18px; line-height: 25.2px;\">Дата посещения: $date</span></span></p>
<p style=\"line-height: 140%; font-size: 14px;\"><span style=\"font-family: Crimson Text, serif;\"><span style=\"font-size: 18px; line-height: 25.2px;\">Процедура: ". $service_text[0][0] ."</span></span></p>
<p style=\"line-height: 140%; font-size: 14px;\"><span style=\"font-family: Crimson Text, serif;\"><span style=\"font-size: 18px; line-height: 25.2px;\">Мастер: ". $employee_text[0][0] ."</span></span></p>
<p style=\"line-height: 140%; font-size: 14px;\"><span style=\"font-family: Crimson Text, serif;\"><span style=\"font-size: 18px; line-height: 25.2px;\">Время: ". $time_slot_select_text[0][0] ."</span></span></p>
  </div>

      </td>
    </tr>
  </tbody>
</table>

<table id=\"u_content_text_3\" style=\"font-family:arial,helvetica,sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
  <tbody>
    <tr>
      <td class=\"v-container-padding-padding\" style=\"overflow-wrap:break-word;word-break:break-word;padding:0px 30px 0px 40px;font-family:arial,helvetica,sans-serif;\" align=\"left\">
        
  <div class=\"v-text-align\" style=\"color: #333333; line-height: 140%; text-align: left; word-wrap: break-word;\">
    <p style=\"font-size: 14px; line-height: 140%;\">&nbsp;</p>
<p style=\"font-size: 14px; line-height: 140%;\"><span style=\"font-size: 22px; line-height: 30.8px;\"><strong><span style=\"line-height: 30.8px; font-family: 'Crimson Text', serif; font-size: 22px;\">Спасибо, что выбираете нас!</span></strong></span><br /><span style=\"font-size: 18px; line-height: 25.2px; font-family: 'Crimson Text', serif;\">Nail.Sun</span></p>
<p style=\"font-size: 14px; line-height: 140%;\">&nbsp;</p>
  </div>

      </td>
    </tr>
  </tbody>
</table>

<table id=\"u_content_text_8\" style=\"font-family:arial,helvetica,sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
  <tbody>
    <tr>
      <td class=\"v-container-padding-padding\" style=\"overflow-wrap:break-word;word-break:break-word;padding:0px 30px 0px 40px;font-family:arial,helvetica,sans-serif;\" align=\"left\">
        
  <div class=\"v-text-align\" style=\"color: #333333; line-height: 140%; text-align: center; word-wrap: break-word;\">
    <p style=\"font-size: 14px; line-height: 140%;\">&nbsp;</p>
<p style=\"font-size: 14px; line-height: 140%;\"><span style=\"font-size: 18px; line-height: 25.2px; font-family: 'Crimson Text', serif;\">Обратная связь: $from</span></p>
<p style=\"font-size: 14px; line-height: 140%;\">&nbsp;</p>
  </div>

      </td>
    </tr>
  </tbody>
</table>

  <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
  </div>
</div>
<!--[if (mso)|(IE)]></td><![endif]-->
      <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
    </div>
  </div>
</div>



<div class=\"u-row-container\" style=\"padding: 0px;background-color: transparent\">
  <div class=\"u-row\" style=\"Margin: 0 auto;min-width: 320px;max-width: 550px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;\">
    <div style=\"border-collapse: collapse;display: table;width: 100%;background-color: transparent;\">
      <!--[if (mso)|(IE)]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding: 0px;background-color: transparent;\" align=\"center\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"width:550px;\"><tr style=\"background-color: transparent;\"><![endif]-->
      
<!--[if (mso)|(IE)]><td align=\"center\" width=\"550\" style=\"width: 550px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\" valign=\"top\"><![endif]-->
<div class=\"u-col u-col-100\" style=\"max-width: 320px;min-width: 550px;display: table-cell;vertical-align: top;\">
  <div style=\"width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\">
  <!--[if (!mso)&(!IE)]><!--><div style=\"padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\"><!--<![endif]-->
  
<table style=\"font-family:arial,helvetica,sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
  <tbody>
    <tr>
      <td class=\"v-container-padding-padding\" style=\"overflow-wrap:break-word;word-break:break-word;padding:50px 10px 30px;font-family:arial,helvetica,sans-serif;\" align=\"left\">
        
<div align=\"center\">
  <div style=\"display: table; max-width:227px;\">
  <!--[if (mso)|(IE)]><table width=\"227\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"border-collapse:collapse;\" align=\"center\"><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"border-collapse:collapse; mso-table-lspace: 0pt;mso-table-rspace: 0pt; width:227px;\"><tr><![endif]-->
  
    
    <!--[if (mso)|(IE)]><td width=\"32\" style=\"width:32px; padding-right: 25px;\" valign=\"top\"><![endif]-->
    <table align=\"left\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"32\" height=\"32\" style=\"border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 25px\">
      <tbody><tr style=\"vertical-align: top\"><td align=\"left\" valign=\"middle\" style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top\">
        <a href=\"https://facebook.com/\" title=\"Facebook\" target=\"_blank\">
          <img src=\"https://cdn.tools.unlayer.com/social/icons/squared-black/facebook.png\" alt=\"Facebook\" title=\"Facebook\" width=\"32\" style=\"outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important\">
        </a>
      </td></tr>
    </tbody></table>
    <!--[if (mso)|(IE)]></td><![endif]-->
    
    <!--[if (mso)|(IE)]><td width=\"32\" style=\"width:32px; padding-right: 25px;\" valign=\"top\"><![endif]-->
    <table align=\"left\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"32\" height=\"32\" style=\"border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 25px\">
      <tbody><tr style=\"vertical-align: top\"><td align=\"left\" valign=\"middle\" style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top\">
        <a href=\"https://twitter.com/\" title=\"Twitter\" target=\"_blank\">
          <img src=\"https://cdn.tools.unlayer.com/social/icons/squared-black/twitter.png\" alt=\"Twitter\" title=\"Twitter\" width=\"32\" style=\"outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important\">
        </a>
      </td></tr>
    </tbody></table>
    <!--[if (mso)|(IE)]></td><![endif]-->
    
    <!--[if (mso)|(IE)]><td width=\"32\" style=\"width:32px; padding-right: 25px;\" valign=\"top\"><![endif]-->
    <table align=\"left\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"32\" height=\"32\" style=\"border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 25px\">
      <tbody><tr style=\"vertical-align: top\"><td align=\"left\" valign=\"middle\" style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top\">
        <a href=\"https://instagram.com/\" title=\"Instagram\" target=\"_blank\">
          <img src=\"https://cdn.tools.unlayer.com/social/icons/squared-black/instagram.png\" alt=\"Instagram\" title=\"Instagram\" width=\"32\" style=\"outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important\">
        </a>
      </td></tr>
    </tbody></table>
    <!--[if (mso)|(IE)]></td><![endif]-->
    
    <!--[if (mso)|(IE)]><td width=\"32\" style=\"width:32px; padding-right: 0px;\" valign=\"top\"><![endif]-->
    <table align=\"left\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"32\" height=\"32\" style=\"border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 0px\">
      <tbody><tr style=\"vertical-align: top\"><td align=\"left\" valign=\"middle\" style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top\">
        <a href=\"https://youtube.com/\" title=\"YouTube\" target=\"_blank\">
          <img src=\"https://cdn.tools.unlayer.com/social/icons/squared-black/youtube.png\" alt=\"YouTube\" title=\"YouTube\" width=\"32\" style=\"outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important\">
        </a>
      </td></tr>
    </tbody></table>
    <!--[if (mso)|(IE)]></td><![endif]-->
    
    
    <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
  </div>
</div>

      </td>
    </tr>
  </tbody>
</table>

<table style=\"font-family:arial,helvetica,sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
  <tbody>
    <tr>
      <td class=\"v-container-padding-padding\" style=\"overflow-wrap:break-word;word-break:break-word;padding:10px 0px 21px;font-family:arial,helvetica,sans-serif;\" align=\"left\">
        
  <table height=\"0px\" align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 3px solid #000000;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%\">
    <tbody>
      <tr style=\"vertical-align: top\">
        <td style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%\">
          <span>&#160;</span>
        </td>
      </tr>
    </tbody>
  </table>

      </td>
    </tr>
  </tbody>
</table>

  <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
  </div>
</div>
<!--[if (mso)|(IE)]></td><![endif]-->
      <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
    </div>
  </div>
</div>



<div class=\"u-row-container\" style=\"padding: 0px 0px 11px;background-color: transparent\">
  <div class=\"u-row\" style=\"Margin: 0 auto;min-width: 320px;max-width: 550px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;\">
    <div style=\"border-collapse: collapse;display: table;width: 100%;background-color: transparent;\">
      <!--[if (mso)|(IE)]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding: 0px 0px 11px;background-color: transparent;\" align=\"center\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"width:550px;\"><tr style=\"background-color: transparent;\"><![endif]-->
      
<!--[if (mso)|(IE)]><td align=\"center\" width=\"275\" style=\"width: 275px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\" valign=\"top\"><![endif]-->
<div class=\"u-col u-col-50\" style=\"max-width: 320px;min-width: 275px;display: table-cell;vertical-align: top;\">
  <div style=\"width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\">
  <!--[if (!mso)&(!IE)]><!--><div style=\"padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\"><!--<![endif]-->
  
<table id=\"u_content_text_5\" style=\"font-family:arial,helvetica,sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
  <tbody>
    <tr>
      <td class=\"v-container-padding-padding\" style=\"overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;\" align=\"left\">
        
  <div class=\"v-text-align\" style=\"color: #34495e; line-height: 180%; text-align: left; word-wrap: break-word;\">
    <p style=\"font-size: 14px; line-height: 180%;\"><span style=\"font-family: 'Crimson Text', serif; font-size: 18px; line-height: 32.4px;\">+375 (29) 3741258<br />г. Молодечно,<br />ул. Площадь Центральная, </span></p>
<p style=\"font-size: 14px; line-height: 180%;\"><span style=\"font-family: 'Crimson Text', serif; font-size: 18px; line-height: 32.4px;\">д. 1а<br /></span></p>
  </div>

      </td>
    </tr>
  </tbody>
</table>

  <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
  </div>
</div>
<!--[if (mso)|(IE)]></td><![endif]-->
<!--[if (mso)|(IE)]><td align=\"center\" width=\"275\" style=\"width: 275px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\" valign=\"top\"><![endif]-->
<div class=\"u-col u-col-50\" style=\"max-width: 320px;min-width: 275px;display: table-cell;vertical-align: top;\">
  <div style=\"width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\">
  <!--[if (!mso)&(!IE)]><!--><div style=\"padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\"><!--<![endif]-->
  
<table id=\"u_content_text_6\" style=\"font-family:arial,helvetica,sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
  <tbody>
    <tr>
      <td class=\"v-container-padding-padding\" style=\"overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;\" align=\"left\">
        
  <div class=\"v-text-align\" style=\"color: #34495e; line-height: 180%; text-align: left; word-wrap: break-word;\">
    <p style=\"font-size: 14px; line-height: 180%;\"><span style=\"font-family: 'Crimson Text', serif; font-size: 18px; line-height: 32.4px;\">Понедельник &ndash; Пятница</span></p>
<p style=\"font-size: 14px; line-height: 180%;\"><span style=\"font-family: 'Crimson Text', serif; font-size: 18px; line-height: 32.4px;\">10:00 &ndash; 22:00<br />Суббота &ndash; Воскресенье</span></p>
<p style=\"font-size: 14px; line-height: 180%;\"><span style=\"font-family: 'Crimson Text', serif; font-size: 18px; line-height: 32.4px;\">10:00 &ndash; 18:30</span></p>
  </div>

      </td>
    </tr>
  </tbody>
</table>

  <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
  </div>
</div>
<!--[if (mso)|(IE)]></td><![endif]-->
      <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
    </div>
  </div>
</div>


    <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
    </td>
  </tr>
  </tbody>
  </table>
  <!--[if mso]></div><![endif]-->
  <!--[if IE]></div><![endif]-->
</body>

</html>

 ";
 
 $headers = "From: $from" . "\r\n" . 
 'MIME-Version: 1.0' . "\r\n" . 
 'Content-type: text/html; charset=utf-8' . "\r\n".
 "Reply-To:  $from" . "\r\n" . 
 "X-Mailer: PHP/" . phpversion();

//  $dbserver = 'localhost';
//     $dbuser = 'root';
//     $dbname = 'test';
//     $dbpass = '';
//     $connect = mysqli_connect($dbserver,$dbuser,$dbpass,$dbname);

//     $sql = "INSERT INTO application_web (kod_object, surname, name, lastname, phone, mail) VALUES ($object_id,'$fam','$name','$otch','$phone','$from')";

 if(mail($to,$subject, $message , $headers)){
    echo '
    <script type="text/javascript">confirm("Забронировано успешно!")</script>';
        echo"<script>window.location.href = 'index.php';</script>";

 }
 else
 {
   echo '
   <script type="text/javascript">confirm("Бронь не выполнена. Попробуйте ещё раз!")</script>';
       echo"<script>window.location.href = 'index.php';</script>";

 }

?>