<?php

function occurrenceCheck($numbers, $value)
{
    $count = 0;
    for ($i = 0; $i < count($numbers); $i++) {
        if ($value == $numbers[$i]) {
            $count++;
        }
    }
    return $count;
}