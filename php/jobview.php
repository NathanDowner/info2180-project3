<!DOCTYPE html>
<?php
    require 'connection.php';
    require 'aside.php';
    $id = $_GET['jid'];
    die(var_dump($id));
    $stmt = $conn->query("select * from Jobs where ID='$id'");
    $job = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<html>
    <head>
        <title>Hire Me!</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" href="../styles/hireme.css" type="text/css" />
        <link rel="stylesheet" href="../styles/newjob.css" type="text/css" />
        <script type="text/javascript" src="login.js"></script>
    </head>
    <body>
        <header>
            <p>Hire Me</p>
        </header>
        
        <main>
            <h1><?= $job['Category']; ?></h1>
            <h5><?= $job['Date_Posted']; ?></h5>
            <h2><?= $job['Company_Name']; ?></h2>
            <h2><?= $job['Company_Location']; ?></h2>
            <br>
            <hr>
            <h2>Job Description</h2>
            <p><?= $job['Job_Description']; ?></p>
        </main>
    </body>
</html>