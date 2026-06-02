<?php

function celFah(float $grau){
    return ($grau * 1.8) +32;
}

echo celFah(15.0);