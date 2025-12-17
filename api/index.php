<?php

define('LARAVEL_START', microtime(true));

// Load autoloader
require __DIR__ . '/../vendor/autoload.php';

// Bootstrap Laravel 11
$app = require_once __DIR__ . '/../bootstrap/app.php';

// Handle request
$app->handleRequest(
    Illuminate\Http\Request::capture()
);
