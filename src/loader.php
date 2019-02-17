<?php
include 'php-util/util.php';
include 'php-util/die-on-error.php';

if (count ($argv) !== 3)
{
    echo 'Type and Filename must be given.';
    exit (1);
}

set_type ($argv[1]);

include $argv[2];
