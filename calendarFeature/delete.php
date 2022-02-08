<?php
  if(isset($_POST["id"]))
  {
    #$servername = "127.0.0.1:3306";
    #$username = "root";
    #$password = "Capstone";
    #$database = "overlap";

    $conn = new PDO('mysql:host=localhost;dbname=overlaptest', 'root', '');
    $query = "DELETE from events WHERE id=:id";
    $statement = $conn->prepare($query);
    $statement->execute(
      array(
        ':id' => $_POST['id']
      )
    );
  }
?>
