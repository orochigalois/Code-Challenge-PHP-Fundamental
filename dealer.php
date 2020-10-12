#!/usr/bin/php
<?php
require 'functions.php';

for ($i = 0; $i < 100; $i++) {

    $dealer = dealer();

    echo 'The hand of cards:' . PHP_EOL;
    print_r($dealer);

    if (j($dealer))
        echo PHP_EOL . 'Congratulations! You have a straight!'. PHP_EOL. PHP_EOL. PHP_EOL;
    else
        echo PHP_EOL . 'Sorry, you don\'t have a straight!' . PHP_EOL. PHP_EOL. PHP_EOL;
}

?>