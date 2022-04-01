<!--
Tugas 1 PHP
Husni A Ulinnuha
-->

<?php

    /*
    ------------------------------------------------------------------------------------------------------------
    PILIH OPERATOR
    ------------------------------------------------------------------------------------------------------------
    pertambahan  "*"
    pengurangan  "-"
    pembagian    "/"
    perkalian    "*"
    */

    $operator = "+";

    // ---------------------------------------------------------------------------------------------------------

    echo "<table border='1' cellpadding='10' cellspacing='0'>"; // ------------------------------- membuat tabel

        echo "<tr align='center'>"; // ------------------------------------------------------- tabel row pertama

            echo "<td>$operator</td>"; // --------------------------------- menunjukkan operator yang dikerjakan

            for ($x_axis=1;$x_axis<=10;$x_axis++) { // ------------------------ for loop untuk nilai pada x axis
                echo "<td>$x_axis</td>";
            }

        echo "</tr>";

        for ($y=1;$y<=10;$y++) { // ------------------ for loop untuk memberikan line break / table row per line

            echo "<tr align='center'>"; 

                for ($y_axis=$y;$y_axis<=$y;$y_axis++) { // ------------------- for loop untuk nilai pada y axis
                    echo "<td>$y_axis</td>";
                }

                for ($x=1;$x<=10;$x++) { // ----------------------- for loop untuk nilai pada operasi aritmatika

                    echo "<td>";

                    switch ($operator) { // ------------------------------ switch case untuk menentukan operator

                        case "+": // ---------------------------------------------------------- case penjumlahan
                            echo $y . "+" . $x . " = " . $y+$x;
                        break;

                        case "-": // ---------------------------------------------------------- case pengurangan
                            echo $y . "-" . $x . " = " . $y-$x;
                        break;

                        case "/": // ------------------------------------------------------------ case pembagian
                            echo $y . "/" . $x . " = " . $y/$x;
                        break;

                        case "*": // ------------------------------------------------------------ case perkalian
                            echo $y . "*" . $x . " = " . $y*$x;
                        break;

                        default:
                            echo "null";
                    }

                    echo "</td>";

                }

            echo "</tr>";
        }

    echo "</table>";

    // -----------------------------------------------------------------------------------------------

?>

<!--
Tugas 1 PHP
Husni A Ulinnuha
-->