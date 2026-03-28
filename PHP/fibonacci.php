<?php
class Fibonacci {
    public function generar($n) {
        $serie = [];

        if ($n >= 1) $serie[] = 0;
        if ($n >= 2) $serie[] = 1;

        for ($i = 2; $i < $n; $i++) {
            $nuevo = $serie[$i-1] + $serie[$i-2];
            $serie[] = $nuevo;
        }

        return $serie;
    }
}

?>