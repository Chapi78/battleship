<?php 

array_shift($argv);
$x = array_shift($argv);
$y = array_shift($argv);

if($x == 0 || $x == null || $y == 0 || $y == null){
    exit;
}

function colle(int $x = 0, int $y = 0) {
    $casehat = "+---";
    $casemid_empty = "|   ";
    $casemid = "| X ";
    $end = "\r\n";
    for ($o=0; $o < $y; $o++) { 
        for ($r = 0; $r < $x ; $r++) { 
            echo $casehat;
        }
        echo "+" . $end;
        for ($m=0; $m < $x; $m++) { 
            echo $casemid_empty;
        }
        echo "|" . $end;
    }
    for ($e = 0; $e < $x ; $e++) { 
            echo $casehat;
    }
    echo "+" . $end;
}

colle($x, $y);

?>