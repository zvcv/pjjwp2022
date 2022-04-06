
$(document).ready(function() {
	
	$("#loginbtn").click(function() {		
		validateLogin();
	});
	
	$("#logoutbtn").click(function() {		
		bLogout();
	});

});

function bLogout() {
	var myurl = "dbtest/applogout.php";
	$.ajax({
		url: myurl,
		type: "GET",
		success: function(data) {
			var res = data.trim().replace(/[\n\r]/g, "");
			if (res == "1") {
				//----kembali ke halaman login
				alert ("see ya!");
				window.location.reload();
			} else {
				alert ("not so fast boi");
			}
		},
		error: function(err) {
			alert(err);
		}
	});
}


function validateLogin() {
	var uid = document.getElementById("xuser").value;
	var psw = document.getElementById("xpass").value;
	
	if (uid == "") {
		alert("tell me yo ID");
	} else {
		if (psw == "") {
			alert("what's the password yo");
		} else {
			//----proses disini
			var myurl = "dbtest/applogin.php";
			var params = {a:uid,b:psw};
			$.ajax({
				url: myurl,
				type: "GET",
				data: params,
				success: function(data) {
					var res = data.trim().replace(/[\n\r]/g, "");
					if (res == "1") {
						//----lanjutkan ke halaman utama
						alert ("user and ID correcto");
						window.location.reload();
					} else {
						alert ("you don't belong here");
					}
				},
				error: function(err) {
					alert(err);
				}
			});
		}
	}
}

function bListMovie() {
	var myurls = "jqtest/jqlistmovie.php";
	$.ajax({
		url: myurls,
		type: "GET",
		success: function(data) {
			var res = data.trim().replace(/[\n\r]/g, "");
			document.getElementById("maindisplay").innerHTML = res;
			
			$("#tblmovie").DataTable();
			
			$("#btnMovieAdd").click(function(){
				document.getElementById("movienameA").value = '';
				document.getElementById("moviegenreA").value = '';
				document.getElementById("moviepriceA").value = '';
				$("#pnlMovieAdd").css("display","block");
			});
			
			$("#btnMovieEdit").click(function(){
				cekEdit();
			});
			
			$("#btnMovieAddClose").click(function(){
				$("#pnlMovieAdd").css("display","none");
			});
			
			$("#btnMovieEditClose").click(function(){
				$("#pnlMovieEdit").css("display","none");
			});			
						
			$("#bmovieadd").click(function(e){
				prosesMovie("ADD",e);
			});

			$("#btnMovieDelete").click(function(){
				var elem = document.getElementsByName("rdoMovie");
				var pilih = false;

				for (i=0; i < elem.length; i++) {
					if (elem[i].checked) {
						pilih = true;
						break;
					}
				}
				
				if (pilih == false) {
					alert("select the movie u wanna delete");
				} else {
					prosesMovie("DELETE");
								
				}
			});


			
		},
		error: function(err) {
			alert(err);
		}
	});
	
}


function cekEdit() {
	var elem = document.getElementsByName("rdoMovie");
	var pilih = false;
	var pilihID = "";
	
	for (i=0; i < elem.length; i++) {
		if (elem[i].checked) {
			pilih = true;
			pilihID = elem[i].value;
			break;
		}
	}
	
	if (pilih == false) {
		alert("select the movie u wanna edit");
	} else {
		//-proses edit disini
		//alert("Data "+pilihID+" akan di Edit");
		
		var myurl = "jqtest/jqgetmovie.php";
		var params = {a:pilihID};
		$.ajax({
			url: myurl,
			type: "GET",
			data: params,
			success: function(data) {
				var res = data.trim().replace(/[\n\r]/g, "");
				if (res == "0") {
					alert ("movie not found");
				} else {
					var row = res.split("|");	
					
					document.getElementById("movieidE").value = row[0];
					document.getElementById("movienameE").value = row[1];
					document.getElementById("moviegenreE").value = row[2];
					document.getElementById("moviepriceE").value = row[3];
					
					$("#pnlMovieEdit").css("display","block");
							
					$("#bmovieedit").click(function(e){
						prosesMovie("EDIT",e);
					});					
					
				}
			},
			error: function(err) {
				alert(err);
			}
		});
		
	}
	
}


function prosesMovie(opt,e) {
	switch(opt) {
		case "ADD": 
			var namamovie = document.getElementById("movienameA").value;
			var genre = document.getElementById("moviegenreA").value;
			var price = document.getElementById("moviepriceA").value;
			
			if (namamovie == "") {
				alert ("bruh what's the title");
			} else {
				if (genre == "") {
					alert ("what's the genre?");
				} else {
					if (price == "") {
						alert ("what's the rent price?");
					} else {						
						
						var myurl = "jqtest/jqaddmovie.php";
						var params = {a:namamovie,b:genre,c:price};
						$.ajax({
							url: myurl,
							type: "GET",
							data: params,
							success: function(data) {
								var res = data.trim().replace(/[\n\r]/g, "");
								if (res == "1") {
									//----display data yg sudah diadd ke dalam list
									alert ("movie data saved");
									$("#pnlMovieAdd").css("display","none");
									bListMovie();
								} else {
									alert ("fail to save movie data");
								}
							},
							error: function(err) {
								alert(err);
							}
						});
						e.preventDefault();
						e.stopImmediatePropagation();
						return false;   
						
					}						
				}				
			}
			break;
		
		case "EDIT":
			var movieid = document.getElementById("movieidE").value;
			var namamovie = document.getElementById("movienameE").value;
			var genre = document.getElementById("moviegenreE").value;
			var price = document.getElementById("moviepriceE").value;
			
			if (namamovie == "") {
				alert ("bruh what's the title");
			} else {
				if (genre == "") {
					alert ("what's the genre?");
				} else {
					if (price == "") {
						alert ("what's the rent price?");
					} else {

						var myurl = "jqtest/jqeditmovie.php";
						var params = {a:movieid,b:namamovie,c:genre,d:price};
						$.ajax({
							url: myurl,
							type: "GET",
							data: params,
							success: function(data) {
								var res = data.trim().replace(/[\n\r]/g, "");
								if (res == "1") {
									//----display data yg sudah diadd ke dalam list
									alert ("movie data saved");
									$("#pnlMovieEdit").css("display","none");
									bListMovie();
								} else {
									alert ("fail to save movie data");
								}
							},
							error: function(err) {
								alert(err);
							}
						});
						e.preventDefault();
						e.stopImmediatePropagation();
						return false;   						
			
					}
				}
			}
			break;
			
		case "DELETE":

			var elem = document.getElementsByName("rdoMovie");
			
			var pilihID = "";

				for (i=0; i < elem.length; i++) {
					if (elem[i].checked) {
						
						pilihID = elem[i].value;
						
						break;
					
					}
				
				}

			var myurl = "jqtest/jqdeletemovie.php";	
			var params = {a:pilihID}

			$.ajax({
				url: myurl,
				type: "GET",
				data: params,
				
				success: function(data) {
					var res = data.trim().replace(/[\n\r]/g, "");
					if (res == "1") {
						alert ("movie deleted from your memoir");
						bListMovie();
					} else {
						alert ("fail to delete movie");
					}

				},
				
				error: function(err) {
					alert(err);
				}
			});
	
			e.preventDefault();
			e.stopImmediatePropagation();
			
			return false; 

		break;
	}

}















