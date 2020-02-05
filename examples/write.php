<?php

// Initial setup
require 'init.php';

$data = <<<EOF
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id turpis sed leo
accumsan mattis. Nulla et dui eget dolor varius mollis sed in est. Sed et mollis
massa. Aliquam erat volutpat. Ut efficitur auctor libero, sed fermentum enim
bibendum at. Morbi ipsum risus, pharetra id diam sit amet, tempus finibus sem.
Duis placerat sem sit amet enim sagittis consectetur. In hac habitasse platea
dictumst. Curabitur in laoreet turpis.
EOF;

// Write the data to the file
$filesystem->put('lorem ipsum.txt', $data);
