<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>monmartius.ru</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="js/bootstrap.js"></script>
</head>
<body>
<?php 

$hostname = 'monmartius.ru:3306';
$username = "root";
$password = "9181k9181K";
$dbName = "monmartius_ru";


//46.173.213.161

  try {

    $conn = new PDO("mysql:host=46.173.213.161;dbname=monmartius_ru", "monmartius", "9181k9181K");

    echo "Подключение к базе прошло успешно.";
    // // $conn = new PDO("mysql:host=46.173.213.161;dbname=monmartius_ru", "root", "");

    // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo 'Подключение к базе данных.<br>';

    // $sql = 'SELECT name FROM employee';
    
    // print "Имя Сотрудника:<br>";
    // foreach ($conn->query($sql) as $row) {
    //     print $row['name'] . "<br>";
    // }
    // $conn = null;

  }
  catch(PDOException $err) {
    echo "Ошибка: не удается подключиться: " . $err->getMessage();
  }


	?>

<form action="/" name="link">
  Link: <input type="text" name="link"><br>
  Description: <input type="text" name="description"><br>
  Email: <input type="text" name="email"><br>
  <button value="Submit" type="submit">Submit</button>
</form>


</body>
</html>