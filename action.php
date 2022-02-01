<?php 
// Каталог, в который мы будем принимать файл:
$uploaddir = './upload/';
$uploadfile = $uploaddir.basename($_FILES['uploadfile']['name']);
$uploaddir1 = '/upload/';
$uploadfile1 = $uploaddir1.basename($_FILES['uploadfile']['name']);

// Копируем файл из каталога для временного хранения файлов:
if (copy($_FILES['uploadfile']['tmp_name'], $uploadfile))
{
echo "<h3>Файл успешно загружен на сервер</h3>";
}
else { echo "<h3>Ошибка! Не удалось загрузить файл на сервер!</h3>"; exit; }

// Выводим информацию о загруженном файле:
echo "<h3>Информация о загруженном на сервер файле: </h3>";
echo "<p><b>Оригинальное имя загруженного файла: ".$_FILES['uploadfile']['name']."</b></p>";
echo "<p><b>Mime-тип загруженного файла: ".$_FILES['uploadfile']['type']."</b></p>";
echo "<p><b>Размер загруженного файла в байтах: ".$_FILES['uploadfile']['size']."</b></p>";
echo "<p><b>Временное имя файла: ".$_FILES['uploadfile']['tmp_name']."</b></p>";
echo "<p><b>Путь файла:".$_FILES['uploadfile']['name']."</b></p>";


$fio = $_POST['fio'];
$photos = $_POST['photos'];
$zog = $_POST['zog'];
$ocenka = $_POST['ocenka'];
$otz = $_POST['otz'];
$submit = $_POST['submit'];


if (isset($_POST['fio']) && isset($_POST['zog']) && isset($_POST['ocenka']) && isset($_POST['otz'])){
    // Переменные с формы
    $fio = $_POST['fio'];
    $zog = $_POST['zog'];
    $ocenka = $_POST['ocenka'];
    $otz = $_POST['otz'];
    
    // Параметры для подключения
    $db_host = "localhost"; 
    $db_user = "root"; // Логин БД
    $db_password = ""; // Пароль БД
    $db_base = 'test'; // Имя БД
    $db_table = "comments"; // Имя Таблицы БД
    // /upload/[название файла]
    try {
        // Подключение к базе данных
        $db = new PDO("mysql:host=$db_host;dbname=$db_base", $db_user, $db_password);
        // Устанавливаем корректную кодировку
        $db->exec("set names utf8");
        // Собираем данные для запроса
        $data = array( 'fio' => $fio, 'zog' => $zog, 'ocenka' => $ocenka, 'otz' => $otz, 'photos' => $uploadfile1); 
        // Подготавливаем SQL-запрос
        $query = $db->prepare("INSERT INTO $db_table (name, photo, title,rating,comment) values (:fio,:photos, :zog,:ocenka,:otz)");
        // Выполняем запрос с данными
        $query->execute($data);
        // Запишим в переменую, что запрос отрабтал
        $result = true;
    } catch (PDOException $e) {
        // Если есть ошибка соединения или выполнения запроса, выводим её
        print "Ошибка!: " . $e->getMessage() . "<br/>";
    }
    
    if ($result) {
    	echo "Успех. Информация занесена в базу данных";
    }
}

if(isset($_POST["send"])) {
    // Выполнили скрипт и назад в форму
    exit('<meta http-equiv="refresh" content="0; url=index.php" />');
}
?>

