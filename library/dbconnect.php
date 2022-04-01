<?php

use LDAP\Result;

    function connect_db()  {

        // -------------------------------------------- DB location and credential
        // ------------------------------------------------------- cek di heidisql
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "weblearning"; // ------------------------------ DB yang mau ditarik
        // -----------------------------------------------------------------------

        // ----------------------------------- request connection to server and DB
        $link = new mysqli($host, $user, $pass, $db);
        // -----------------------------------------------------------------------

        if (mysqli_connect_errno()) { // -------------------------- error handling

        // ------------------------------------------------- menghentikan aplikasi
            die ("Can't connect to DB, Error: " . mysqli_connect_error());
        // -----------------------------------------------------------------------

        } else { // ----------------------------------------------- kalau berhasil

        // ----------------------------------- server and DB are located and ready
            return $link;
        // -----------------------------------------------------------------------

        }

    }

    function runsqltext($sSQL) {
        $connected = connect_db();

        if ($connected) {
            $result = mysqli_query($connected, $sSQL);
            if ($result) {
                return $result;
            } else {
                die ("Can't execute query. SQL: " . $sSQL);
            }
        }

        mysqli_close($connected);

    }

?>