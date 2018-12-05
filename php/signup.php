<?php
require 'aside.php';
?>
<head>
        <title>Hire Me!</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" href="../styles/hireme.css" type="text/css" />
        <link rel="stylesheet" href="../styles/signup.css" type="text/css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script type="text/javascript" src="../scripts/signup.js"></script>
        <script type="text/javascript" src="loadpages.js"></script>
</head>
<main>
<h1>New User</h1>
<form action="process_user.php" method="POST">
    <div id="group">
        <label for="fname">Firstname</label>
        <input id="fname" type="text" name="fname"required/>
    </div> 
    <div id="group">
        <label for="lname">Lastname</label>
        <input id="lname" type="text" name="lname" required/>
    </div>
    <div id="group">
        <label for="pass">Password</label>
        <input id="pass" type="password" name="pass" required/>
    </div>
    <div id="group">
        <label for="email">Email</label>
        <input id="email" type="email" name="email" placeholder="e.g john.doe@example.com" required/>
    </div>
    <div id="group">
        <label for="tele">Telephone</label>
        <input id="tele" type="tel" name="phone" pattern="\d{3}-\d{3}-\d{4}" placeholder="e.g. 876-123-4567" required/>
    </div id="group">
    
    <div id="submit">
        <input type="submit" name="Submit"/>
    </div>
</form>
</main>
    