<?php

require __DIR__ . '/bootstrap/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);

try {
    $kernel->call('storage:link');
    echo "The storage link has been created successfully.";
} catch (\Exception $e) {
    echo "Error: " . $e->getMessage();
}
