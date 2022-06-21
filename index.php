<?php

require "function.php";

require "task.php";

$pdo = connectionDb();

$tasks = fetchAllData($pdo);

require "index.view.php";