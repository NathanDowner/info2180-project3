<?php
// Process our Form

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    dump($_POST);
    
    $firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
    $telephone = filter_input(INPUT_POST, 'telephone', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    if (!isset($_POST['firstname'])) {
      echo 'First name is empty<br/>';
    }
   
    if (empty($lastname)) {
      echo 'Last name is empty<br/>';
    }
    
    if (!preg_match("/^\d{3}-\d{3}-\d{4}$/", $telephone)) {
      echo 'That telephone number is not valid!<br/>';
    }
   
    if (!$email) {
      echo 'That email is not valid!<br/>';
    }
  }

  function dump($value) {
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
  }
?>