<?php
function IMC (float $peso, float $altura): float {
    return $peso / ($altura**2);
}

echo IMC(72.0, 1.70);
