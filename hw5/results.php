<?php
session_start();

$totalScore = (isset($_SESSION['scorePage1']) ? $_SESSION['scorePage1'] : 0) + (isset($_SESSION['scorePage2']) ? $_SESSION['scorePage2'] : 0) + (isset($_SESSION['scorePage3']) ? $_SESSION['scorePage3'] : 0);
session_unset();

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Результаты теста</title>
</head>
<body>
<h1>Ваш результат: <?php echo $totalScore; ?> баллов</h1>
<a href="page1.php">Пройти тест заново</a>
</body>
</html>
