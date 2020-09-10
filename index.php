<?php

require_once 'connect.php';

$stmt = $pdo->prepare('SELECT * FROM books');
$stmt->execute();
$aBooks = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
    <?php
        foreach ($aBooks as $book) {
            echo '<li><a href="book.php?id=' . $book['id'] . '">' . $book['title'] . '</a></li>';
        }
    ?>
    </ul>
</body>
</html>