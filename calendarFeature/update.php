<?php

#$servername = "127.0.0.1:3306";
#$username = "root";
#$password = "Capstone";
#$database = "overlap";

$conn = new PDO('mysql:host=localhost;dbname=overlaptest', 'root', '');
if(isset($_POST["id"]))
{
  $query = "UPDATE events SET title=:title, start_event=:start_event, end_event=:end_event WHERE id=:id";
  $statement = $conn->prepare($query);
  $statement->execute(
    array(
      ':title'        => $_POST['title'],
      ':start_event'  => $_POST['start'],
      ':end_event'    => $_POST['end'],
      ':id'           => $_POST['id']
    )
  );
}

?>
