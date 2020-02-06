<?php




echo $input;
$test = readline("");
$find = "s";
$pos = strpos($test, $find);


if ($pos === false) {
    echo "geen tijd gevonden";
} else {
    echo "$test seconden";
}
