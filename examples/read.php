<?php

use League\Flysystem\FileNotFoundException;

// Initial setup
require 'init.php';

// Try reading a file
try {
    echo  $filesystem->read('lorem ipsum.txt');
} catch (FileNotFoundException $e) {
    echo $e->getMessage();
}


