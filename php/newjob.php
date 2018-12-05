<?php
require 'aside.php';
?>
<head>
    <title>Hire Me!</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/hireme.css" type="text/css" />
    <link rel="stylesheet" href="../styles/newjob.css" type="text/css" />
    <!--<script type="text/javascript" src="login.js"></script>-->
</head>
<main>
    <h1>New Job</h1>
    <form action="process_job.php" method="POST">
        <div id="group">
            <label for="jtitle">Job Title</label>
            <input id="jtitle" type="text" name="jtitle" placeholder="e.g Senior Designer or Product Manager" required/>
        </div> 
        <div id="group">
            <label for="jdescrip">Job Description</label>
            <input id="description" type="textarea" name="jdescrip" rows="10" cols="50"/>
            <!--< id="description" type="text-area" name="jdescrip" rows="10" cols="50"/>-->
        </div>
        <div id="group">
            <label for="cat">Category</label>
            <select id="category" type="text" name="cat" required>
                <option value="" disabled selected hidden>Select a category</option>
                <option value="Design">Design</option>
                <option value="Programming">Programming</option>
                <option value="DevOps & Sysadmin">DevOps & Sysadmin</option>
                <option value="Customer Support">Customer Support</option>
                <option value="Sales & Marketing"> Sales & Marketing</option>
            </select>
        </div>
        <div id="group">
            <label for="comp">Company</label>
            <input id="comp" type="text" name="comp" required/>
        </div>
        <div id="group">
            <label for="jloc">Job Location</label>
            <input id="jloc" type="text" name="jloc" placeholder="e.g. Kingston, Jamaica" required/>
        </div id="group">
        
        <div id="submit">
            <input type="submit" name="Submit"/>
        </div>
    </form>
</main>
