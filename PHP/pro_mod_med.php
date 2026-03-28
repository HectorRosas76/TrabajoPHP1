<?php
class promedio_media_moda {
    public function promedio($arr) {
        return array_sum($arr) / count($arr);
    }

    public function media($arr) {
        sort($arr);
        $n = count($arr);

        if ($n % 2 == 0) {
            return ($arr[$n/2 -1] + $arr[$n/2]) / 2;
        } else {
            return $arr[floor($n/2)];
        }
    }

    public function moda($arr) {
        $conteo = array_count_values($arr);
        arsort($conteo);
        return array_keys($conteo)[0];
    }
}

?>