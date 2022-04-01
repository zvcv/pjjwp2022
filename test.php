<?php

    for ($xx=0;$xx<=10;$xx++) {
        echo $xx . " ";
    }

    echo "<br>";

    for ($yy=1;$yy<=10;$yy++) {
        echo $yy . "<br>";
    }

    echo "<br><br>";

    $operator = "-";

    for ($y=1;$y<=10;$y++) {
        for ($x=1;$x<=10;$x++) {
            switch ($operator) {
                case "+":
                    echo $y+$x . " ";
                break;
                case "-":
                    echo $y-$x . " ";
                break;
                case "/":
                    echo $y/$x . " ";
                break;
                case "*":
                    echo $y*$x . " ";
                break;
            }
        }
        echo "<br>";
    }


?>