<?php
include 'php-util/util.php';
include 'php-util/die-on-error.php';

if (count ($argv) !== 2)
{
    echo 'Type and Filename must be given.';
    exit (1);
}

include $argv[1];
