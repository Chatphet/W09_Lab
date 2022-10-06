<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>workshop09</title>


</head>

<?php include "connect.php" ?>

<body>

<?php
    $stmt = $pdo->prepare("SELECT * FROM member");
    $stmt->execute();
?> 

    <?php while ($row = $stmt->fetch()) {  ?>
        ชื่อสมาชิก: <?=$row ["name"] . "<br>" ?>
        ที่อยู่: <?=$row ["address"] . "<br>" ?>
        อีเมล์: <?=$row ["email"] . "<br>" ?>
        <a href='edit-form.php?username=<?=$row["username"]?>'>แก้ไข</a>
        <?php echo "<hr>\n"; ?>
    <?php } ?> 

</body>
</html>