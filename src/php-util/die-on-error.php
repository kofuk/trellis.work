<?php
function die_on_error_handler ($errno, $errstr, $errf, $errl)
{
    fwrite (STDERR, "Error: $errno $errstr $errf $errl");
    exit (1);
}
set_error_handler ('die_on_error_handler');
