function daftar() {
	var user = document.getElementById('user').value;
	var pass = document.getElementById('pass').value;
	var nama = document.getElementById('nama').value;
	var date = document.getElementById('t_lahir').value;

	var konfirmasi = confirm("Apakah Sudah Yakin");
				var text = "";
				
				if(konfirmasi === true) {
					text = "Kamu klik Tombol OK";
				}else{
					text = "Kamu klik Tombol Cancel";
				}
	if (user != "" && pass != "" && nama != "" && date != "") {
		alert("");
	}else{
		alert("Jangan Kosong !!");
	}
}