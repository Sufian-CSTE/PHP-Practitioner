<?php

$app = [];

App::bind('config', require 'config.php');

// $config = App::get('config');

App::bind('database', new QueryBuilder(

    Connection::make(App::get('config')['database'])
    
));