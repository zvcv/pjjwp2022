<?php

    include "library/dbconnect.php"; // ----------------- tergantung lokasi DB nya

    $sql = "SELECT * FROM tablemovie";
    $result = runsqltext($sql);

    if ($result) {
    //     echo "DB behasil terhubung dan query berhasil dijalankan.";
    // } else {
    //     echo "test";
        $numrow = mysqli_num_rows($result); // ------------------- cek jumlah data

        if ($numrow > 0) {

            while ($row = mysqli_fetch_row($result)){
                echo $row[0] . " " . $row[1] . " " . $row[2] . "<br>";
            }

            echo "Jumlah Data: " . $numrow . " record(s)";

        } else {
            echo "Data unavailable.";
        }
    }

?>