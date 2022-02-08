<?php

#$servername = "127.0.0.1:3306";
#$username = "root";
#$password = "Capstone";
#$database = "overlap";

$conn = new PDO('mysql:host=localhost;dbname=overlaptest', 'root', '');


if(isset($_POST["title"]))
{
  $query = "INSERT INTO events (title, start_event, end_event)
  VALUES (:title, :start_event, :end_event)";
  $statement = $conn->prepare($query);
  $statement->execute(
    array(
      ':title'        => $_POST['title'],
      ':start_event'  => $_POST['start'],
      ':end_event'    => $_POST['end']
    )
  );
}

?>
