<?php
//establish DB connection using PDO
#$servername = "127.0.0.1:3306";
#$username = "root";
#$password = "Capstone";
#$database = "overlap";
try{
$conn = new PDO('mysql:host=localhost;dbname=overlaptest', 'root', '');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//echo "Connection successful";
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

$data = array();

$query = "SELECT * FROM events ORDER BY id";

$statement = $conn->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

foreach($result as $row){
  $data[] = array(
    'id'    =>  $row["id"],
    'title' =>  $row["title"],
    'start' =>  $row["start_event"],
    'end'   =>  $row["end_event"]
  );
}

echo json_encode($data);

?>
