<?php
    require_once __DIR__ . '/vendor/autoload.php';
    
    use Hans\Data\People;

    $people = new People('hans');

    $people->sayHello('wahyu');