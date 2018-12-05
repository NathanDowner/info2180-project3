<?php

//Connect to database
require('connection.php');
//sanitize the data

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    // $title = strip_tags($_POST["jtitle"]);
    // $descrip = strip_tags($_POST["jdescrip"]);
    // $category = strip_tags($_POST["cat"]);
    // $company = strip_tags($_POST["comp"]);
    // $location = strip_tags($_POST["jloc"]);
    
    $title = filter_input(INPUT_POST, 'jtitle', FILTER_SANITIZE_STRING, FILTER_FLAG_ENCODE_AMP);
    $descrip = filter_input(INPUT_POST, 'jdescrip', FILTER_SANITIZE_STRING);
    $category = filter_input(INPUT_POST, 'cat', FILTER_SANITIZE_STRING, FILTER_FLAG_ENCODE_AMP);
    $company = filter_input(INPUT_POST, 'comp', FILTER_SANITIZE_STRING, FILTER_FLAG_ENCODE_AMP);
    $location = filter_input(INPUT_POST, 'jloc', FILTER_SANITIZE_STRING, FILTER_FLAG_ENCODE_AMP);
    
    
    
    // the below wont work for some reason
   
    // $stmt = $conn->prepare("INSERT INTO Jobs
    // (Job_Title, Job_Description, Category, Company_Name, Company_Location)
    // VALUES (:title, :desc,:cat,:comp,:loc");
    
    // $stmt->bindValue(':title', $title, PDO::PARAM_STR);
    // $stmt->bindValue(':desc', $descrip, PDO::PARAM_STR);
    // $stmt->bindValue(':cat', $category, PDO::PARAM_STR);
    // $stmt->bindValue(':comp', $company, PDO::PARAM_STR);
    // $stmt->bindValue(':loc', $location, PDO::PARAM_STR);
    
    //Try $stmt ->bindValue
    
    
    
    
    
    // $success = $stmt->execute();
    
    
     /*WORKS */
    $success = $conn->exec("insert into Jobs (Job_Title, Job_Description, Category, Company_Name, Company_Location)
                            values ('$title', '$descrip', '$category', '$company', '$location')");
    
    
    
    echo ($success);
    if ($success) {
        print "Success";
    } else {
        print "HI";
        print "Fail!";
    }
    
}

function dd($var) {
    die(var_dump($var));
}




