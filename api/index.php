<?php

// Ensure bootstrap/cache directory exists and is writable
$cacheDir = __DIR__ . '/../bootstrap/cache';
if (!is_dir($cacheDir)) {
    mkdir($cacheDir, 0755, true);
}

// Clear any cached config/routes/views in serverless environment
if (file_exists($cacheDir . '/config.php')) {
    unlink($cacheDir . '/config.php');
}
if (file_exists($cacheDir . '/routes-v7.php')) {
    unlink($cacheDir . '/routes-v7.php');
}
if (file_exists($cacheDir . '/services.php')) {
    unlink($cacheDir . '/services.php');
}

// Set permissions for serverless
@chmod($cacheDir, 0755);

// Forward to Laravel
require __DIR__ . '/../public/index.php';
