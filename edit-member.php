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
        $stmt = $pdo->prepare("UPDATE member SET password = ?, name = ?, address = ?, mobile = ?, email = ? WHERE username = ?");
        $stmt->bindParam(1, $_POST["password"]);
        $stmt->bindParam(2, $_POST["name"]);
        $stmt->bindParam(3, $_POST["address"]);
        $stmt->bindParam(4, $_POST["mobile"]);
        $stmt->bindParam(5, $_POST["email"]);
        $stmt->bindParam(6, $_POST["username"]);
        if($stmt->execute()){
            echo "แก้ไขข้อมูลของ ". $_POST["name"]. " สำเร็จ";
        }
    ?>
    
</body>
</html>