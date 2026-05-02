<?php

// require 'app.php'

function incluirTemplates($nombre): void {
    // echo TEMPLATES_URL."$nombre.php";
    include 'include/templates/$nombre.php';
}