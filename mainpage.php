<!--
Tugas UI UX
Husni A Ulinnuha
PJJ Pemrograman Web I 2022
Pusdiklat Keuangan Umum
-->

<!DOCTYPE html>
<html>
<head>

    <title>Husni A Ulinnuha | Tugas UI UX</title>

    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/840/840523.png">
    <!-- <a href="https://www.flaticon.com/free-icons/nuclear" title="nuclear icons">Nuclear icons created by Freepik - Flaticon</a> -->

    <link rel="stylesheet" href="library/mainpage.css">

</head>
<body>

    <div class="mainbox">

        <div class="header">

            <div class="titlelogo">
                <img class="logoicon" src="https://cdn-icons-png.flaticon.com/512/5020/5020506.png" alt="logo" title="Hacker stickers created by stickerfolio - Flaticon" width="80px">
                <!-- <a href="https://www.flaticon.com/free-stickers/hacker" title="hacker stickers">Hacker stickers created by stickerfolio - Flaticon</a> -->
            </div>

            <div class="title">
                <div class="titlemain">Learn Web Design with HTML, CSS, and PHP</div>
                <div class="titlesub">Without using JS</div>
            </div>

            <div class="clearfloat"></div>
        </div>

        <div class="menu">

            <a href="#home">Home</a>

            <div class="maindrop">

                <button class="subdrop1">
                    Transaction
                </button>

                <div class="submenu">
                    <a href="#">Movie List</a>
                    <a href="#">Rent Movie</a>
                    <a href="#">Return Rented Movie</a>
                </div>

            </div>

            <div class="maindrop">

                <button class="subdrop2">
                    Administration
                </button>

                <div class="submenu">
                    <a href="#">Customer Data</a>
                    <a href="#">User Admin</a>
                </div>

            </div>

            <div class="maindrop">

                <button class="subdrop3">
                    About
                </button>

                <div class="submenu">
                    <a href="#">About Me</a>
                    <a href="#">About You</a>
                    <a href="#">About Us</a>
                    <!-- <a href="#">Image Source</a> -->
                </div>

            </div>

            <a class="signout" href="loginpage.php">Sign Out</a>
        
        </div>         

        <div class="contentleft">
            <div class="leftimg">
                <img src="https://img.freepik.com/free-vector/cinema-films-festival-poster_8071-4498.jpg" alt="poster" title="Cinema films festival poster Premium Vector created by user4468087 - freepik" height="250px">
                <!-- <caption><a href="https://www.freepik.com/premium-vector/cinema-films-festival-poster_14323709.htm">Cinema films festival poster Premium Vector created by user4468087 - freepik</a></caption> -->
            </div>
        </div>
        <div class="contentright">
            <?php
                error_reporting(E_ERROR | E_PARSE);
                $user = $_POST["xuser"];
                echo "Hello, " . $user . "!<br>Welcome to the Club!<br>";
            ?>
        </div>
        <div class="clearfloat"></div>
    
        <div class="footer">
            <div class="lorem">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor voluptate, nobis expedita magnam, eligendi similique ex cupiditate a amet, nulla corporis eos ducimus sunt porro nemo animi assumenda incidunt. Amet!
            </div>
        </div>
        
    </div>

    <div class="footerx">
        Husni A Ulinnuha | 2022
    </div>



</body>
</html>

<!--
Tugas UI UX
Husni A Ulinnuha
PJJ Pemrograman Web I 2022
Pusdiklat Keuangan Umum
-->