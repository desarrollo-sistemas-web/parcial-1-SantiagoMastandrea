
<?php

// Ejercicio: Crea una función llamada esMultiplo que tome dos enteros como parámetros y devuelva true si el primero es múltiplo del segundo, o false en caso contrario.
// Complejidad: BAJA (1 punto)

function esMultiplo($a, $b)
{
    if($b == 0) {
        return false;
    }
    if ($a % $b == 0) {
        return true;
    } else {
        return false;
    }
}
