<?php
function die_on_error_handler ($errno, $errstr, $errf, $errl)
{
    die ("Error: $errno $errstr $errf $errl");
}
set_error_handler ('die_on_error_handler');
