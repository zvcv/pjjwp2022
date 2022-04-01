<?php

    $newline = "<br><br>";
    $x = "señor";

    echo "ola $x";
    echo $newline;

    $y = 13;
    $z = 420;
    $uwu = $y + $z;

    echo $uwu;
    echo $newline;

    $operator = "b";
    if ($operator == "a") {
        echo "jadi gini..";
    } else {
        echo "bukan gitu";
    }

    echo $newline;

    switch ($operator) {
        case "x":
            echo "jadi gini..";
            break;
        case "y":
            echo "oh gitu..";
            break;
        case "z":
            echo "dikasi info maszzeehhh";
            break;
        default:
            echo "INPUT TEXT HERE";
            break;
    }

    echo $newline;
    
    for ($i=0;$i<10;$i++) {
        echo $i . " ";
    }

    echo $newline;

    $i = true;
    $a = 1;
    while ($i) {
        echo $a . " ";
        $a = $a + 1;
        if ($a > 15) {
            $i = false;
        }
    }

    echo $newline;

    for ($z=0;$z<5;$z++) {
        for ($x=$z;$x<5;$x++) {
            echo "_";
        }
        for ($c=0;$c<=$z;$c++) {
            echo "*";
        }
        for ($c=0;$c<$z;$c++) {
            echo "*";
        }
        echo nl2br("\n");
    }

    echo $newline;

    for ($zz=0;$zz<=10;$zz++){
        for ($zx=$zz;$zx<=10;$zx++) {
            echo ($zx * 1) . " ";
        }
        echo nl2br("\n");
    }
?>
