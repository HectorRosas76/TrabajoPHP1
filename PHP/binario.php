<?php
class Binario {
    public function convertir($n) {
        $binario = "";

        while ($n > 0) {
            $binario = ($n % 2) . $binario;
            $n = floor($n / 2);
        }
        return $binario ?: "0";
    }
}
?>