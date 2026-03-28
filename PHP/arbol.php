<?php
class Nodo {
    public $valor;
    public $izq;
    public $der;

    public function __construct($valor) {
        $this->valor = $valor;
        $this->izq = null;
        $this->der = null;
    }
}

class Arbol {
    public function construir($pre, $in) {
        if (empty($pre)) return null;

        $raiz = $pre[0];
        $nodo = new Nodo($raiz);

        $pos = array_search($raiz, $in);

        $izqIn = array_slice($in, 0, $pos);
        $derIn = array_slice($in, $pos + 1);

        $izqPre = array_slice($pre, 1, count($izqIn));
        $derPre = array_slice($pre, 1 + count($izqIn));

        $nodo->izq = $this->construir($izqPre, $izqIn);
        $nodo->der = $this->construir($derPre, $derIn);

        return $nodo;
    }
}

?>