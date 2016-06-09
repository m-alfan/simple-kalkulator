function tambah(){
	//tangkap id form
	var form = window.document.getElementById("hitung");
	//tangkap element form
	var bil1 = parseFloat(form.a1.value);
	var bil2 = parseFloat(form.a2.value);
	//proses perhitungan
	var total = parseFloat(bil1 + bil2);
	//tempatkan hasil proses perhitungan di element hasil
	form.hasil.value = total;
}


function kurang(){
	//tangkap id form
	var form = window.document.getElementById("hitung");
	//tangkap element form
	var bil1 = parseFloat(form.a1.value);
	var bil2 = parseFloat(form.a2.value);
	//proses perhitungan
	var total = parseFloat(bil1 - bil2);
	//tempatkan hasil proses perhitungan di element hasil
	form.hasil.value = total;
}


function kali(){
	//tangkap id form
	var form = window.document.getElementById("hitung");
	//tangkap element form
	var bil1 = parseFloat(form.a1.value);
	var bil2 = parseFloat(form.a2.value);
	//proses perhitungan
	var total = parseFloat(bil1 * bil2);
	//tempatkan hasil proses perhitungan di element hasil
	form.hasil.value = total;
}


function bagi(){
	//tangkap id form
	var form = window.document.getElementById("hitung");
	//tangkap element form
	var bil1 = parseFloat(form.a1.value);
	var bil2 = parseFloat(form.a2.value);
	//proses perhitungan
	var total = parseFloat(bil1 / bil2);
	//tempatkan hasil proses perhitungan di element hasil
	form.hasil.value = total;
}


function pangkat(){
	//tangkap id form
	var form = window.document.getElementById("hitung");
	//tangkap element form
	var bil1 = parseFloat(form.a1.value);
	var bil2 = parseFloat(form.a2.value);
	//proses perhitungan
	var total = parseFloat(Math.pow(bil1,bil2));
	//tempatkan hasil proses perhitungan di element hasil
	form.hasil.value = total;
}
