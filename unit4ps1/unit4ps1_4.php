<?php
    header("Access-Control-Allow-Origin: *");
    
    function fibonacci($length) {
        $i = 0;
        $j = 1;
        $arr = array(0, 1);
        switch ($length) {
            case 0:
                $arr = array();
                break;
            case 1:
                $arr = array(0);
        }

        for ($l = 2; $l < $length; $l++) {
            $next = $i + $j;
            array_push($arr, $next);
            $i = $j;
            $j = $next; 
        }

        $ret = array("length" => $length, "seq" => $arr);
        return json_encode($ret);
    }

    $n = $_GET["n"];
    echo fibonacci($n);    
?>