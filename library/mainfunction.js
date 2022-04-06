
function bLogin() {
	validateLogin();
}

function bLogout() {
	var url = "../dbtest/applogout.php";
	var res = loadfromajax(url);
	res = res.trim().replace(/[\n\r]/g, "");
			
	if (res == "1") {
		//----kembali ke halaman login
		alert ("User berhasil Logout");
		window.location.reload();
	} else {
		alert ("Logout gagal");
	}
}


function validateLogin() {
	var uid = document.getElementById("xuser").value;
	var psw = document.getElementById("xpass").value;
	
	if (uid == "") {
		alert("User ID harus diisi");
	} else {
		if (psw == "") {
			alert("Password harus diisi");
		} else {
			//----proses disini
			var url = "../dbtest/applogin.php?a="+uid+"&b="+psw+"";
			var res = loadfromajax(url);
			
			res = res.trim().replace(/[\n\r]/g, "");
			
			if (res == "1") {
				//----lanjutkan ke halaman utama
				alert ("user id dan password benar");
				window.location.reload();
			} else {
				alert ("user id dan password tidak dikenal di database");
			}
		}
	}
}

function bListMovie() {
	var url = "../dbtest/applistmovie.php";
	var res = loadfromajax(url);
	res = res.trim().replace(/[\n\r]/g, "");
	
	document.getElementById("maindisplay").innerHTML = res;
}

function loadfromajax(url) {
	var xmlHttp = null;
	var result = null;
	if (window.ActiveXObject) {
		xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
	} else {
		if (window.XMLHttpRequest) {
			xmlHttp = new XMLHttpRequest();
		}
	}
	if (xmlHttp == null) {
		document.write("XML not supported");
	} else {
		xmlHttp.open("GET",url,false);
		xmlHttp.onreadystatechange = function () {
			if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
				result = xmlHttp.responseText;
			}
		}
		xmlHttp.send(null);
	}
	return result;
}

















