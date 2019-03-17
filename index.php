<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>monmartius.ru</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="js/bootstrap.js"></script>
  <style>
    #form {

      width: 300px;
      text-align: right;
    }
    #form span {
      width: 100px;
      display: inline-block;
      text-align: right;
      padding: 5px;
    }
  </style>
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


  $linx = file_get_contents("linx.txt");


// isset($REQUEST['link']) 
//       &&  
      // &&  isset($REQUEST['description']) 
      // && !isset($REQUEST['email']) 
  // isset($REQUEST['link']

  if(
      isset($REQUEST['link']) &&
      isset($REQUEST['description']) &&
      !isset($REQUEST['email'])
    ) {

    $linx .= '<p><a href = "' . $link . '">' . $description . "</a></p>";

  } 

	?>

<form id ="form" action="/" name="link">
  <span>Link:</span><input type="text" name="link" cols="50"><br>
  <span>Description:</span><input type="text" name="description" cols="50"><br>
  <span>Email:</span><input type="text" name="email" cols="50"><br>
  <button value="Submit" type="submit">Submit</button>
</form>

<?php  
  
  echo $linx;

?>

</body>
</html>