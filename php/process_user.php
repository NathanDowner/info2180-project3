<?php

//Connect to database

require 'connection.php';

// Process our Form

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // dump($_POST);
    
    $firstname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
    $lastname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING);
    $telephone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $passowrd = filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    if (!isset($firstname)) {
      echo 'First name is empty<br/>';
      die();
    }
   
    if (empty($lastname)) {
      echo 'Last name is empty<br/>';
      die();
    }
    
    if (!preg_match("/^\d{3}-\d{3}-\d{4}$/", $telephone)) {
      echo 'That telephone number is not valid!<br/>';
      die();
    }
   
    if (!$email) {
      echo 'That email is not valid!<br/>';
      die();
    }
    
    $stmt = $conn->prepare("insert into Users (Firstname, Lastname, Password, Telephone, Email)
                          values (:fname, :lname, :pass, :tele, :email)");
    $stmt->bindParam(':fname', $firstname, PDO::PARAM_STR);
    $stmt->bindParam(':lname', $lastname, PDO::PARAM_STR);
    $stmt->bindParam(':pass', $password, PDO::PARAM_STR);
    $stmt->bindParam(':tele', $telephone, PDO::PARAM_STR);
    $stmt->bindParam(':email', MD5($email), PDO::PARAM_STR);
    
    $result = $stmt->execute();
    
    if($result) {
      echo "Successfully added.";
    } else {
      echo "Failed Horribly";
    }
    
  }

  function dump($value) {
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
  }
?>
