<?php
class Acronimo {
    public function generar($frase) {
        $frase = strtolower($frase);
        $resultado = "";

        for ($i = 0; $i < strlen($frase); $i++) {
            $char = $frase[$i];

            // Detectar inicio de palabra
            if (ctype_alpha($char)) {
                if ($i == 0 || $frase[$i-1] == " " || $frase[$i-1] == "-") {
                    $resultado .= strtoupper($char);
                }
            }
        }

        return $resultado;
    }
}

?>