<?php




foreach ($argv as $arg) {
}

$pos = strpos($arg, "s");


if (strpos($arg, "s") === false) {
    echo "geen tijd gevonden";
} else {
    echo (int) $arg . " Seconds";
}
