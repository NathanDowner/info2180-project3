<?php
include 'connection.php';

$email = $password = "";

// Variable To Store Error Message
$error=''; 


// session_start();

// checks to ensure a post request was made
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "Username or Password is invalid";
    }
    else{
        // Define $username and $password
        $email=$_POST['username'];
        $password=$_POST['password'];
        
        // To protect MySQL injection for Security purpose
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $password = filter_var($password, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        
        //hash the password retrieved from the login
        $hashPassword = md5($password);
        
        
        // SQL query to fetch information of registerd users and finds user match.
        $stmt = $conn->prepare("SELECT * FROM Users WHERE Email=:email");
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
       
        $rows = $stmt->fetch(PDO::FETCH_ASSOC);
        
        //checks to ensure the password entered and password stored match
        if($rows["Password"] == $hashPassword){
            
             // Initializing Session for the user
            $_SESSION['login_user']=$email;
            $_SESSION['id']=$rows['ID'];
            
            // Redirecting to user home page
            header("location: home.php");
        }
        else{
            
            header("location: index.html");
            $error = "Username or Password is invalid";
            echo $error;
        }
        
        // $conn->close(); // Closing Connection
    }
}
?>