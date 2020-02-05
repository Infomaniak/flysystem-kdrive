<?php

/**
 * This is not an example file. It is included in the examples files
 * in this folder to setup the environment.
 */

require dirname(__DIR__). '/vendor/autoload.php';

use Infomaniak\KDrive\KDriveAdapter;
use League\Flysystem\Filesystem;

$kDrive = new KDriveAdapter(
    '123456',
    'john.doe@example.tld',
    '********************'
);

$filesystem = new Filesystem($kDrive);
