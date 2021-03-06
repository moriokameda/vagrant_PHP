<?php

session_start();
require_once(__DIR__ . '/config.php');
require_once(__DIR__ . '/functions.php');
require_once(__DIR__ . '/todo.php');

//get todos
$todoApp = new \MyApp\Todo();
$todos = $todoApp->getAll();

// var_dump($todos);
// exit;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Todos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="container">
        <h1>TODOS</h1>
        <form action="" id="new_todo_form">
            <input type="text" name="" id="new_todo" placeholder="whats needs to be done?">
        </form>
        <ul id="todos">
            <?php foreach($todos as $todo) : ?>
            <li id="todo_<?= h($todo->id); ?>" data-id="<?= h($todo->id); ?>">
                <input type="checkbox"<?php if($todo->state === '1') { echo 'checked';} ?> name="" class="update_todo">
                <span class="todo_title <?php if($todo->state === '1') { echo 'done';} ?>"><?= h($todo->title); ?></span>
                <div class="delete_todo">x</div>
            </li>
            <?php endforeach; ?>
            <li id="todo_template" data-id="">
                <input type="checkbox" name="" class="update_todo">
                <span class="todo_title "></span>
                <div class="delete_todo">x</div>
            </li>
            <!-- <li>
                <input type="checkbox" name="" id="" checked>
                <span class="done">Do something again!</span>
                <div class="delete_todo">x</div>
            </li> -->
        </ul>
    </div>
    <input type="hidden" name="" id="token" value="<?= h($_SESSION['token']); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="todo.js"></script>
</body>
</html>
