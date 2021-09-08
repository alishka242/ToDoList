<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список дел</title>
    <link rel="stylesheet" href="../../css/style.css" />
</head>

<body>
    <div class="container">
        <div class="styleForm">
            <h1>Добавить задачу</h1>
            <form action="addTask.php" method="post">
                <input type="text" name="task" id="task" placeholder="Нужно сделать..">
                <button type="submit" name="sendTask">Отправить</button>
            </form>
        </div>
        <div class="taskListBoxShadow">
            <h1>Список задач</h1>
            <div class="taskList">
                <? include "layouts/taskList.php" ?>
            </div>
        </div>
</body>

</html>