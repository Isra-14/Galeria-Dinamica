<?php

function isFactor($base, $factor) {
    if ($base % $factor == 0) {
        return true;
    } else {
        return false;
    }
}

require 'views/index.view.php';