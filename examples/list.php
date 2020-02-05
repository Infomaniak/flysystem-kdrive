<?php

// Initial setup
require 'init.php';

// Get the list of files in the given folder
$files = $filesystem->listContents('./', $recursive = false);

// Print the list of files
foreach ($files as $file) {
    echo $file['type'] . ' - ' . $file['path'] . PHP_EOL;
}
