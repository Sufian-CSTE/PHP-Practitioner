<!DOCTYPE html>
<html>

<head>
    <style>
        body{background-color:#add8e6}h1{color:#fff;text-align:center}div{text-align:center}p{font-family:verdana;font-size:20px}
    </style>
</head>

<body>

    <div>
        <h1>PDO refactoring and Collaborators</h1>
    </div>
    <ul class="a">
        <?php foreach ($tasks as $task): ?>
            <li>
                <?php if($task->completed) : ?>
                    <strike><?= $task->description; ?></strike> 
                <?php else : ?>
                    <?= $task->description; ?>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>

</body>

</html>