<?php

define("EXTENSIONS", ".php");

function views($paths)
{

    foreach ($paths as $path) :
        include $path . EXTENSIONS;
    endforeach;
}


$paths = ['includes/header', 'views/task', 'includes/footer'];

views($paths);
