function kosong() {
	var user = document.getElementById('user').value;
	var pass = document.getElementById('pass').value;
	if (user == "" && pass == "") {
		alert("Username dan Password jangan kosong !!");
	}else if(user == ""){
		alert("Username jangan kosong !!");
	}else if(pass == ""){
		alert("Password jangan kosong !!");
	}
}