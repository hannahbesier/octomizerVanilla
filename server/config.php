<?php

$env = parse_ini_file(__DIR__ . '/.env');

function env($key, $default = null)
{
    global $env;
    return $env[$key] ?? $default;
}
