<?php

// require 'app.php'

function incluirTemplates($nombre): void {
    // echo TEMPLATES_URL."$nombre.php";
    include  __DIR__ ."/templates/$nombre.php";
}

define('BASE_URL', '/restauranteSabados/');