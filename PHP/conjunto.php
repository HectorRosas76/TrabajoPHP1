<?php
class Conjuntos {

    public function union($A, $B) {
        $res = $A;

        foreach ($B as $b) {
            if (!in_array($b, $res)) {
                $res[] = $b;
            }
        }

        return $res;
    }

    public function interseccion($A, $B) {
        $res = [];

        foreach ($A as $a) {
            if (in_array($a, $B)) {
                $res[] = $a;
            }
        }

        return $res;
    }

    public function diferencia($A, $B) {
        $res = [];

        foreach ($A as $a) {
            if (!in_array($a, $B)) {
                $res[] = $a;
            }
        }

        return $res;
    }
}
?>