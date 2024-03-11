<?php
if(isset($_POST['number'])) {
    // Получаем число из формы
    $number = $_POST['number'];
    if($number % 2 == 0) {
        echo "Число $number четное.";
    } else {
        echo "Число $number нечетное.";
    }
}
?>

<form method="post" action="">
    <label>Введите число: </label>
    <input type="number" name="number" required>
    <input type="submit" value="Проверить">
</form>