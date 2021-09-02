<?php

require_once 'vendor/autoload.php'; 

use Ulid\Ulid;

$ulid = Ulid::generate();
echo (string) $ulid;
