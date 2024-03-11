<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Определение этапа тренировки</title>
</head>
<body>
    <h2>Определение этапа тренировки</h2>
    <form method="post">
        <label for="age">Введите ваш возраст:</label>
        <input type="number" id="age" name="age" required>
        <button type="submit">Проверить</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $age = $_POST["age"];

        if ($age <= 18) {
            echo "<p>Вы начинающий спортсмен.</p>";
        } elseif ($age <= 35) {
            echo "<p>Вы находитесь на среднем уровне тренировок.</p>";
        } else {
            echo "<p>Вы профессиональный спортсмен.</p>";
        }
    }
    ?>
</body>
</html>