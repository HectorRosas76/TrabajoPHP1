<?php
session_start();

class Calculadora {
    public function operar($a, $b, $op) {
        switch ($op) {
            case '+': return $a + $b;
            case '-': return $a - $b;
            case '*': return $a * $b;
            case '/': return $b != 0 ? $a / $b : "Error- No se puede dividir por cero";
            case '%': return ($a * $b) / 100;
        }
    }

    public function guardarHistorial($texto) {
        $_SESSION['historial'][] = $texto;
    }

    public function obtenerHistorial() {
        return $_SESSION['historial'] ?? [];
    }

    public function borrarHistorial() {
        unset($_SESSION['historial']);
    }
}
?>