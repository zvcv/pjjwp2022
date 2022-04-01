    <!DOCTYPE html>
    <html>
    <head>
        <title>Document</title>
    </head>
    <body>

        <div>
        <form method="POST" action="terimadata.php">
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

        <!-- <?php
            
            if (isset($_POST["xuid"]) && isset($_POST["xpsw"])) {
                $uid = $_GET["xuid"];
                $psw = $_GET["xpsw"];
    
                echo "User ID   " . $uid . "<br>";
                echo "Password " . $psw;
            }

        ?> -->
        
    </body>
    </html>