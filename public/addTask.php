<?php
include "../config/configDB.php";

$task = $_POST['task'];

if ($task == ''){
    echo "<p>Ошибка!</p><a href='/'>Введите задание</a>";
    exit();
}

$sql = "INSERT INTO tasks (task) VALUES (:task)";
$query = $pdo->prepare($sql);
$query->execute(['task' => $task]);
header('Location: /');