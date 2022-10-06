<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    .center {
        text-align: center;
    }
</style>

<body>

<?php include "connect.php" ?>

<div class = center>

    <?php
        $stmt = $pdo->prepare("SELECT * FROM member WHERE username = ?");
        $stmt->bindParam(1, $_REQUEST["username"]);
        $stmt->execute();
        $row = $stmt->fetch();
    ?>
    
    <div>
        ชื่อสมาชิก: <?=$row["name"]?><br>
        ที่อยู่: <?=$row["address"]?><br>
        อีเมล: <?=$row["email"]?><br>
    </div>
    
</div>

</body>
</html>