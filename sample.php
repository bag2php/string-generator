<?php

require __DIR__ . '/vendor/autoload.php';

use function Bag2\string_generate;

$count = 0;
$chars = array_unique(str_split('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!"#$%&\'()=~\\|-`@[]{}+*<>?_;:.,'));

sort($chars);
echo implode('', $chars), PHP_EOL;exit;

$expected = '0b907bd06803cf206b0d661ce3bfb144';

foreach (string_generate(3, $chars) as $string) {
    $count++;
    echo $string, PHP_EOL;
    if ($expected === md5($string)) {
        echo "pass is {$string}", PHP_EOL;
        break;
    }
}

var_dump($count);
