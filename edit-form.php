<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php include "connect.php" ?>

    <?php
        $stmt = $pdo->prepare("SELECT * FROM member WHERE username = ?");
        $stmt->bindParam(1, $_GET["username"]);
        $stmt->execute();
        $row = $stmt->fetch();
    ?>

    <form action="edit-member.php" method="post">
        <input type="hidden" name="username" value="<?=$row["username"]?>">
        ชื่อ-นามสกุล: <input type="text" name="name" value="<?=$row["name"]?>"><br><br>
        password: <input type="password" name="password" value="<?=$row["password"]?>"><br><br>
        ที่อยู่:<br> <textarea name="address" rows="3" cols="40"><?=$row["address"]?></textarea><br><br>
        เบอร์โทรศัพท์: <input type="number" name="mobile" value="<?=$row["mobile"]?>"><br><br>
        email: <input type="email" name="email" value="<?=$row["email"]?>"><br><br>
        <input type="submit" value="ตกลง">
    </from>
    
</body>
</html>