<?php




foreach ($argv as $arg) {
}

$pos = strpos($arg, "s");


if (strpos($arg, "s") === false) {
    echo "no Time found";
} else {
    echo (int) $arg . " Seconds";
}

