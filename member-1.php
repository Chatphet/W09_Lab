<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php include "connect.php" ?>

<body>

    <?php
        $stmt = $pdo->prepare("INSERT INTO member VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bindParam(1, $_POST["username"]);
        $stmt->bindParam(2, $_POST["password"]);
        $stmt->bindParam(3, $_POST["name"]);
        $stmt->bindParam(4, $_POST["address"]);
        $stmt->bindParam(5, $_POST["mobile"]);
        $stmt->bindParam(6, $_POST["email"]);
        $stmt->execute();

        $username = $_REQUEST["username"] ?? 'default';

        header("location: member-detail.php?username=" . $username);
    ?>

</body>
</html>