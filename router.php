<?php

$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

$file = __DIR__ . $path;

if ($path !== "/" && is_file($file)) {
    return false;
}

if (str_ends_with($path, ".js")) {
    http_response_code(404);
    exit("JS-Datei nicht gefunden: " . $file);
}

require __DIR__ . "/index.html";
