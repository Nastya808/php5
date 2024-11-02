<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $scorePage3 = 0;
    $correctAnswersPage3 = [
        1 => 'define()',
        2 => 'setcookie()',
        3 => '$_SESSION',
        4 => 'array_key_exists()',
        5 => 'header()',
        6 => 'explode()',
        7 => 'strpos()',
        8 => 'strrev()',
        9 => 'shuffle()',
        10 => 'session_unset()'
    ];

    foreach ($correctAnswersPage3 as $question => $correctAnswer) {
        if (isset($_POST["question$question"]) && strtolower(trim($_POST["question$question"])) == strtolower($correctAnswer)) {
            $scorePage3 += 5;
        }
    }

    $_SESSION['scorePage3'] = $scorePage3;
    header('Location: results.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Тест - Страница 3</title>
</head>
<body>
<form method="post">
    <!-- Вопрос 1 -->
    <p>1. Какую функцию нужно использовать, чтобы объявить константу?</p>
    <label>
    <input type="text" name="question1">

    <!-- Вопрос 2 -->
    <p>2. Какую функцию нужно использовать, чтобы установить cookie?</p>
    <input type="text" name="question2">

    <!-- Вопрос 3 -->
    <p>3. В какой глобальной переменной находятся session данные?</p>
    <input type="text" name="question3">

    <!-- Вопрос 4 -->
    <p>4. Какую функцию нужно использовать чтобы проверить наличие ключа в массиве PHP?</p>
    <input type="text" name="question4">

    <!-- Вопрос 5 -->
    <p>5. Какую функцию нужно использовать для перехода на другую страницу из PHP скрипта?</p>
    <input type="text" name="question5">

    <!-- Вопрос 6 -->
    <p>6. С помощью какой функции можно разбить строку на массив по разделителю?</p>
    <input type="text" name="question6">

    <!-- Вопрос 7 -->
    <p>7. Как найти позицию первого вхождения подстроки в строку?</p>
    <input type="text" name="question7">

    <!-- Вопрос 8 -->
    <p>8. Какую функцию использовать чтобы перевернуть строку?</p>
    <input type="text" name="question8">

    <!-- Вопрос 9 -->
    <p>9. Какую функцию можно использовать, чтобы перемешать элементы массива?</p>
    <input type="text" name="question9">

    <!-- Вопрос 10 -->
    <p>10. Как уничтожить все глобальные переменные сессии?</p>
    <input type="text" name="question10">

    <button type="submit">Finish</button>
</form>
</body>
</html>
