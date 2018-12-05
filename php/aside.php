<header>
    <p>Hire Me</p>
</header>
<aside>
    <ul>
        <li>
            <i class="fas fa-home"></i>
            <a id="home" href="home.php" data-target="home">Home</a>
        </li>
        <?php if($_SESSION['id']==1):?>
        <li>
            <i class="fas fa-user-plus"></i>
            <a id="signup" href="signup.php" data-target="signup">Add User</a>
        </li>
        <?php endif; ?>
        <li>
            <i class="fas fa-edit"></i>
            <a id="newjob" href="newjob.php" data-target="newjob">New Job</a> 
        </li>
        <li>
            <i class="fas fa-power-off"></i>
            <a href="logout.php">Logout</a>
        </li>
    </ul>
</aside>