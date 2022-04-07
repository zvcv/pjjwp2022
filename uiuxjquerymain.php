


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

        <a href="uiuxjquery.php">Home</a>

        <div class="maindrop">

            <button class="subdrop1">
                Transaction
            </button>

            <div class="submenu">
                <a href="javascript:;" onclick="bListMovie()">Movie List</a>
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

        <a id="logoutbtn" class="signout" href="javascript:;" onclick="bLogout()">Sign Out</a>

    </div>

    <div class="contentleft">
        <div class="leftimg">
            <img src="https://img.freepik.com/free-vector/cinema-films-festival-poster_8071-4498.jpg" alt="poster" title="Cinema films festival poster Premium Vector created by user4468087 - freepik" height="250px">
            <!-- <caption><a href="https://www.freepik.com/premium-vector/cinema-films-festival-poster_14323709.htm">Cinema films festival poster Premium Vector created by user4468087 - freepik</a></caption> -->
        </div>
    </div>

    <div class="contentright">

        <!-- 
        <?php
            error_reporting(E_ERROR | E_PARSE);
            $user = $_POST["xuser"];
            echo "Hello, " . $user . "!<br>Welcome to the Club!<br>";
        ?>
        -->
        <div id="maindisplay">
            Hello, <?php echo $_SESSION["user"]; ?>!<br>Welcome to the Clubb!<br>
        </div>
        
    </div>

    <div class="clearfloat"></div>

    <div class="footer">
        <div class="lorem">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor voluptate, nobis expedita magnam, eligendi similique ex cupiditate a amet, nulla corporis eos ducimus sunt porro nemo animi assumenda incidunt. Amet!
        </div>
    </div>

</div>

<div id="pnlMovieAdd" class="modal">
    <div class="modal-content">
        <span id="btnMovieAddClose" class="btnModalClose" >X</span>
        <b>Tambah Data</b>
        <table>
            <tr>
                <td>Movie Name:</td>
                <td><input type="text" id="movienameA" /></td>
            </tr>
            <tr>
                <td>Genre:</td>
                <td><input type="text" id="moviegenreA" /></td>
            </tr>
            <tr>
                <td>Rent Price:</td>
                <td><input type="text" id="moviepriceA" /></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="button" id="bmovieadd" value="Simpan" class="btnClick" /></td>
            </tr>
        </table>
    </div>
</div>

<div id="pnlMovieEdit" class="modal">
    <div class="modal-content">
        <span id="btnMovieEditClose" class="btnModalClose" >X</span>
        <b>Edit Data</b>
        <table>
            <tr>
                <td>Movie Name:</td>
                <td><input type="text" id="movienameE" /></td>
            </tr>
            <tr>
                <td>Genre:</td>
                <td><input type="text" id="moviegenreE" /></td>
            </tr>
            <tr>
                <td>Rent Price:</td>
                <td><input type="text" id="moviepriceE" /></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="button" id="bmovieedit" value="Simpan" class="btnClick" /></td>
            </tr>
        </table>
        <input type="hidden" id="movieidE" />
    </div>
</div>

<div class="footerz">
    Husni A Ulinnuha | 2022
</div>



