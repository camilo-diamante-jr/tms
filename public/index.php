<?php

define('EXTENSIONS', ".php");

function views($paths)
{

    foreach ($paths as $path) :
        include $path . EXTENSIONS;
    endforeach;
}


$paths = ['../src/includes/header', '../src/views/task', '../src/includes/footer'];

views($paths);
