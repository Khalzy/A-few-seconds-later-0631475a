<?php



// echo $input;

foreach ($argv as $arg) {
}

$pos = strpos($arg, "s");


if (strpos($arg, "s") === false) {
    echo "no Time found";
} else {
    echo (int) $arg . " Seconds";
}

// if ($pos > false) {
//     echo "geen tijd gevonden";
// } else {
//     echo (int) $u . " seconden";
// }

// $pos = strpos($argv[1], "s");


// if ($pos === false) {
//     echo  "geen tijd gevonden";
// } else {
//     echo (int) $argv[1] . " seconden";
// }
