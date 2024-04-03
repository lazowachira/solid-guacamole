<?php

$sName = "localhost:3306";
$uName = "root";
$pass = "";
$db_name = "auth_db";

try {
    $conn = new PDO(
        "mysql:host=$sName;dbname=$db_name",
        $uName,
        $pass
    );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed : " . $e->getMessage();
}


function getUserById($id, $db)
{
    $sql = "SELECT * FROM users WHERE id = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$id]);

    if ($stmt->rowCount() == 1) {
        $user = $stmt->fetch();
        return $user;
    } else {
        return 0;
    }
}
