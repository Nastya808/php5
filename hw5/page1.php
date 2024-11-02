<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $scorePage1 = 0;
    $correctAnswersPage1 = [
        1 => 2,
        2 => 1,
        3 => 3,
        4 => 2,
        5 => 1,
        6 => 3,
        7 => 1,
        8 => 1,
        9 => 3,
        10 => 1
    ];

    foreach ($correctAnswersPage1 as $question => $correctAnswer) {
        if (isset($_POST["question$question"]) && $_POST["question$question"] == $correctAnswer) {
            $scorePage1++;
        }
    }

    $_SESSION['scorePage1'] = $scorePage1;
    header('Location: page2.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Тест - Страница 1</title>
</head>
<body>
<form method="post">
    <!-- Вопрос 1 -->
    <p>1. Язык программирования PHP нашел наиболее широкое применение в:</p>
    <label>
    <input type="radio" name="question1" value="1"> Автоматизированном проектировании<br>
    <input type="radio" name="question1" value="2"> Разработке web-приложений<br>
    <input type="radio" name="question1" value="3"> Создании и управлении базами данных<br>

    <!-- Вопрос 2 -->
    <p>2. Какими разделителями окружены скрипты PHP?</p>
    <input type="radio" name="question2" value="1"> &lt;?php … ?&gt;<br>
    <input type="radio" name="question2" value="2"> &ltphp&gt … &lt/php&gt<br>
    <input type="radio" name="question2" value="3"> &lt/&gt php &lt/&gt<br>

    <!-- Вопрос 3 -->
    <p>3. Используя синтаксис языка PHP, напишите “Hello, World!”:</p>
    <input type="radio" name="question3" value="1"> printf “Hello, World!”<br>
    <input type="radio" name="question3" value="2"> &ltp&gt Hello, World! &lt/p&gt<br>
    <input type="radio" name="question3" value="3"> echo “Hello, World!”<br>

    <!-- Вопрос 4 -->
    <p>4. С какого символа начинаются все переменные в PHP?</p>
    <input type="radio" name="question4" value="1"> &lt&gt<br>
    <input type="radio" name="question4" value="2"> $<br>
    <input type="radio" name="question4" value="3"> !<br>

    <!-- Вопрос 5 -->
    <p>5. К какому языку программирования синтаксически наиболее близок PHP?</p>
    <input type="radio" name="question5" value="1"> C и Perl<br>
    <input type="radio" name="question5" value="2"> .Net<br>
    <input type="radio" name="question5" value="3"> VBScript<br>

    <!-- Вопрос 6 -->
    <p>6. Перечислите основные типы данных в PHP:</p>
    <input type="radio" name="question6" value="1"> Boolean, float, logic, text, subject, NULL<br>
    <input type="radio" name="question6" value="2"> String, boolean, text, massive, logic, NULL<br>
    <input type="radio" name="question6" value="3"> Boolean, integer, float, string, array, object, resource, NULL<br>

    <!-- Вопрос 7 -->
    <p>7. В PHP используется … типизация данных.</p>
    <input type="radio" name="question7" value="1"> Динамическая<br>
    <input type="radio" name="question7" value="2"> Синтаксическая<br>
    <input type="radio" name="question7" value="3"> Коммутационная<br>

    <!-- Вопрос 8 -->
    <p>8. Как правильно включить файл “time.inc”?</p>
    <input type="radio" name="question8" value="1"> &lt?php include "time.inc"?&gt<br>
    <input type="radio" name="question8" value="2"> &lt/&gt php include ‘time.inc’ &lt&gt<br>
    <input type="radio" name="question8" value="3"> &lt!-- include file="time.inc" --&gt<br>

    <!-- Вопрос 9 -->
    <p>9. Укажите правильный способ создания функции в PHP:</p>
    <input type="radio" name="question9" value="1"> create newFunction()<br>
    <input type="radio" name="question9" value="2"> new_function newFunction()<br>
    <input type="radio" name="question9" value="3"> function newFunction()<br>

    <!-- Вопрос 10 -->
    <p>10. Укажите неверно заданное имя:</p>
    <input type="radio" name="question10" value="1"> $my-Var<br>
    <input type="radio" name="question10" value="2"> $myVar<br>
    <input type="radio" name="question10" value="3"> $my_Var<br>
    </label>

    <button type="submit">Next</button>
</form>
</body>
</html>
