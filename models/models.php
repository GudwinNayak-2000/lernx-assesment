<?php

spl_autoload_register(
    function ($class) {
        include_once dirname(__DIR__) . '/models/' . $class . '.model.php';
    }

);
