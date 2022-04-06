    <!DOCTYPE html>
    <html>
    <head>
        <title>Document</title>
    </head>
    <body>

        <div>
        
        <!-- method bisa diganti dengan POST atau GET, script PHP harus disesuaikan -->
		<!-- action bisa diganti dengan terimadata.php atau menggunakan PHP_SELF -->

        <form method="POST" action="terimadata.php">
        <!-- <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" > -->
            <table border="0">
                <tr>
                    <td>User ID: </td>
                    <td><input name="xuid" type="text"></td>
                </tr>
                <tr>
                    <td>Pasword: </td>
                    <td><input name="xpsw" type="password"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input value="login" type="submit"></td>
                </tr>
            </table>
        </form>

        </div>

        <!-- gunakan php script dibawah ini jika menggunakan PHP_SELF -->
        <!--
        <?php
            
            if (isset($_POST["xuid"]) && isset($_POST["xpsw"])) {
                $uid = $_GET["xuid"];
                $psw = $_GET["xpsw"];
    
                echo "User ID   " . $uid . "<br>";
                echo "Password " . $psw;
            }

        ?>
        -->
        
    </body>
    </html>