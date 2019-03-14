<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>monmartius.ru</title>
</head>
<body>
<?php phpinfo();

$hostname = 'monmartius.ru:3306';
$username = "root";
$password = "9181k9181K";
$dbName = "monmartius_ru";


//46.173.213.161

  try {

    $conn = new PDO("mysql:host=46.173.213.161;dbname=monmartius_ru", "monmartius", "9181k9181K");


    // $conn = new PDO("mysql:host=46.173.213.161;dbname=monmartius_ru", "root", "");

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Подключение к базе данных.<br>';

    $sql = 'SELECT name FROM employee';
    
    print "Имя Сотрудника:<br>";
    foreach ($conn->query($sql) as $row) {
        print $row['name'] . "<br>";
    }
    $conn = null;

  }
  catch(PDOException $err) {
    echo "Ошибка: не удается подключиться: " . $err->getMessage();
  }







// mysqli_connect($hostname,$username,$password) OR DIE(mysql_error());

// mysql_select_db($dbName) or die(mysql_error());

// $query = "SELECT * FROM `monmartius_ru` WHERE 1;";

// $result=mysql_query($query) or die(mysql_error());

// echo "works!";

// mysql_close();






	?>

</body>
</html>