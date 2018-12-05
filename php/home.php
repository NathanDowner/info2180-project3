<!DOCTYPE html>
<?php
    require 'connection.php';
    require 'aside.php';
    $stmt = $conn->query("SELECT * FROM Jobs");
    $jobs = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    $stmt = $conn->query("select * from Jobs_Applied_For");
    $applied = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<html>
    <head>
        <title>Hire Me!</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" href="../styles/hireme.css" type="text/css" />
        <link rel="stylesheet" href="../styles/home.css" type="text/css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script type="text/javascript" src="../scripts/home.js"></script>
        <script type="text/javascript" src="loadpages.js"></script>
    </head>
    <body>
        <main>
            <div class="title">
                <h1>Dashboard</h1> <input type="submit" value="Post a Job"/>
            </div>
            <div class="content">
                
                <h3>Available Jobs</h3>
                <table>
                    <theSad>
                        <tr>
                            <th>Company</th>
                            <th>Job Title</th>
                            <th>Category</th>
                            <th>Date</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($jobs as $j): ?>
                        <tr>
                            <td><?= $j['Company_Name']; ?></td>
                            <td><a href="jobview.php?jid=<?= $j['ID'];?>"></a><?= $j['Job_Title']; ?></a></td>
                            <td><?= $j['Category']; ?></td>
                            <td><?= $j['Date_Posted']; ?></td>
                            <td></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                
                <h3>Jobs Applied For</h3>
                <table>
                    <thead>
                        <th>Company</th>
                        <th>Job Title</th>
                        <th>Catrgory</th>
                        <th>Date Applied</th>
                    </thead>
                    <tbody>
                        <?php foreach ($applied as $a): ?>
                        <tr>
                            <td><?= $a['Company']; ?></td>
                            <td><a href="jobview.php?jid=<?= $a['ID'];?>"></a><?= $a['Job_Title']; ?></a></td>
                            <td><?= $a['Category']; ?></td>
                            <td><?= $a['Date_Applied']; ?></td>
                            <td></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            
        </main>
        <form method="POST" action="job.php">
            <input type="hidden" name="jid"/>
        </form>
    </body>
</html>
