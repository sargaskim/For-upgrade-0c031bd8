<?php
$array = array(
    "Joris",
    "Mark",
    "Jesse",
    "Daan",
    "Nour",
    "Henry"
);

foreach ($array as &$value) {
    print $value.PHP_EOL;
}

?>