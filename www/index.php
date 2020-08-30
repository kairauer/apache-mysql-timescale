<?php
$conn = mysqli_connect('db', 'user', 'test', 'myDb', 3306);
mysqli_set_charset($conn, "utf8");
$query = 'SELECT * From Person';
$result = mysqli_query($conn, $query);

$dbconn2 = pg_connect("host=timescale port=5432 dbname=testdb user=postgres password=password");
$timescaleQuery = 'SELECT * FROM testtable';
$timescaleResult = pg_query($timescaleQuery);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Demo</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>

<body>
JA MOIN!<br/>
  <p>
    <?php
    while ($value = $result->fetch_array(MYSQLI_ASSOC)) {
      foreach ($value as $element) {
        echo ' - ' . $element;
      }
    }
    $result->close();
    mysqli_close($conn);

    
    while ($row = pg_fetch_assoc($timescaleResult)) {
      echo print_r($row, true);
    }
    ?>
    -
  </p>
</body>

</html>