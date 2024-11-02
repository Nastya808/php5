<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $scorePage2 = 0;
    $correctAnswersPage2 = [
        1 => [1, 3],
        2 => [1, 2, 3],
        3 => [1, 3],
        4 => [2, 3],
        5 => [1, 2],
        6 => [1],
        7 => [1, 2],
        8 => [1],
        9 => [1, 2, 3],
        10 => [1, 3]
    ];

    foreach ($correctAnswersPage2 as $question => $answers) {
        if (isset($_POST["question$question"]) && array_diff($answers, $_POST["question$question"]) == []) {
            $scorePage2 += 3;
        }
    }

    $_SESSION['scorePage2'] = $scorePage2;
    header('Location: page3.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Тест - Страница 2</title>
</head>
<body>
<form method="post">
    <!-- Вопрос 1 -->
    <p>1. Какие виды комментарий в PHP?</p>
    <label>
    <input type="checkbox" name="question1[]" value="1"> // <br>
    <input type="checkbox" name="question1[]" value="2"> !! <br>
    <input type="checkbox" name="question1[]" value="3"> /**/ <br>

    <!-- Вопрос 2 -->
    <p>2. Варианты вывода строки в PHP:</p>
    <input type="checkbox" name="question2[]" value="1"> echo "..." <br>
    <input type="checkbox" name="question2[]" value="2"> echo &lt&lt&ltp...p <br>
    <input type="checkbox" name="question2[]" value="3"> echo '...' <br>

    <!-- Вопрос 3 -->
    <p>3. Какие из перечисленных тегов пригодны для открытия и закрытия PHP блока?</p>
    <input type="checkbox" name="question3[]" value="1"> &lt?php?&gt; <br>
    <input type="checkbox" name="question3[]" value="2"> &lt! !&gt; <br>
    <input type="checkbox" name="question3[]" value="3"> &lt?= ?&gt; <br>

    <!-- Вопрос 4 -->
    <p>4. Как можно подключить файл?</p>
    <input type="checkbox" name="question4[]" value="1"> Connect(); <br>
    <input type="checkbox" name="question4[]" value="2"> require(); <br>
    <input type="checkbox" name="question4[]" value="3"> include(); <br>

    <!-- Вопрос 5 -->
    <p>5. Как отобразить текст с помощью PHP-скрипта?</p>
    <input type="checkbox" name="question5[]" value="1"> echo "Method 1" <br>
    <input type="checkbox" name="question5[]" value="2"> print "Method 2" <br>
    <input type="checkbox" name="question5[]" value="3"> text: Hello <br>

    <!-- Вопрос 6 -->
    <p>6. Какие глобальные переменные существуют в языке PHP?</p>
    <input type="checkbox" name="question6[]" value="1"> $_POST["var"] <br>
    <input type="checkbox" name="question6[]" value="2"> $_PAR["var"] <br>
    <input type="checkbox" name="question6[]" value="3"> $_VAR["VAR"] <br>

    <!-- Вопрос 7 -->
    <p>7. Как можно приводить типы в PHP?</p>
    <input type="checkbox" name="question7[]" value="1"> (int), (integer) <br>
    <input type="checkbox" name="question7[]" value="2"> (float), (double), (real) <br>
    <input type="checkbox" name="question7[]" value="3"> (str) <br>

    <!-- Вопрос 8 -->
    <p>8. Сколько в PHP типов данных?</p>
    <input type="checkbox" name="question8[]" value="1"> 8 <br>
    <input type="checkbox" name="question8[]" value="2"> 10 <br>
    <input type="checkbox" name="question8[]" value="3"> 6 <br>

    <!-- Вопрос 9 -->
    <p>9. Какие циклы есть в PHP?</p>

    <input type="checkbox" name="question9[]" value="1"> for <br>
    <input type="checkbox" name="question9[]" value="2"> foreach <br>
    <input type="checkbox" name="question9[]" value="3"> while <br>

    <!-- Вопрос 10 -->
    <p>10. Какие модификаторы доступа существуют в PHP?</p>

    <input type="checkbox" name="question10[]" value="1"> public <br>
    <input type="checkbox" name="question10[]" value="2"> internal <br>
    <input type="checkbox" name="question10[]" value="3"> private <br>
    </label>

    <button type="submit">Next</button>
</form>
</body>
</html>
