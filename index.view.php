<!DOCTYPE html>
<html>

<head>
    <style>
        body{background-color:#add8e6}h1{color:#fff;text-align:center}div{text-align:center}p{font-family:verdana;font-size:20px}
    </style>
</head>

<body>

    <div>
        <h1>My First CSS Example</h1>
        <p>This is a paragraph.</p>
    </div>
    <ul class="a">
        <?php foreach ($tasks as $task): ?>
            <li><?= $task->description; ?></li>
        <?php endforeach; ?>
    </ul>

</body>

</html>