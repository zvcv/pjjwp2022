
		<div id="mainbox">
			
			<div id="header">
				<div id="titlelogo">
					<img src="images/icon.png" width="100px" />
				</div>
				<div id="title">
					<div id="titlemain">Belajar Web dengan HTML-CSS dan PHP</div>
					<div id="titlesub">Tanpa menggunakan javascript</div>
				</div>
				<div id="clearfloat"></div>
			</div>
			
			<div id="menu">
				<ul>
					<li><a href="#">Halaman Depan</a></li>
					<li>
						<a href="#">Transaksi</a>
						<ul>
							<li><a href="javascript:;" onclick="bListMovie()">Daftar Movie</a></li>
							<li><a href="#">Sewa Movie</a></li>
							<li><a href="#">Pengembalian</a></li>
						</ul>
					</li>
					<li>
						<a href="#">Administrasi</a>
						<ul>
							<li><a href="#">Data Pelanggan</a></li>
							<li><a href="#">User Admin</a></li>
						</ul>
					</li>
					<li><a href="javascript:;" onclick="bLogout()">Log Out</a></li>
				</ul>
			</div>
			
			<div id="content">
				<div id="contentleft"></div>
				<div id="contentright">
					
					<div id="maindisplay">
						Hello <?php echo $_SESSION["user"]; ?> selamat datang
					</div>
				
				</div>
				<div id="clearfloat"></div>
			</div>
			
			<div id="footer"></div>
			
		</div>