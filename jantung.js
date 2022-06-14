function hitungdetak(){
  var usia=parseFloat
  (document.tform.usia.value)
  if(isNaN(usia))
    usia= 0.0;
  
  var denyut=parseFloat
  (document.tform.denyut.value)
  if(isNaN(denyut))
    denyut= 0.0;

  var hasil="";
  var balita;
  var anak;
  var remaja;
  var dewasa;

  if(balita = usia >= 1 && usia <= 5) {
    if(denyut >= 100 && denyut <= 160) {
      hasil = "Normal"
    }
    else {
      hasil = "Tidak Normal"
    }
  }
      document.tform.hsl.value=hasil;
  
  if(anak = usia >=6 && usia <= 10) {
    if(denyut >= 70 && denyut <= 120) {
      hasil = "Normal"
    }
    else {
      hasil = "Tidak Normal"
    }
  }

  document.tform.hsl.value=hasil;

if(remaja = usia >= 11 && usia <= 17) {
  if(denyut >= 60 && denyut <= 100 ) {
    hasil = "Normal"
  }
  else{
    hasil = "Tidak Normal"
  }
}
  document.tform.hsl.value=hasil;

  if(dewasa = usia >= 18 && usia <= 100) {
    if(denyut >= 60 && denyut <= 100) {
      hasil ="Normal"
    }
    else{
      hasil = "Tidak Normal"
    }
  }

  if (usia === 0 ) { 
    hasil = "Silahkan masukkan nilai";
    }
  else if (denyut === 0){
    hasil = "Silahkan masukkan nilai";
	}
	
	if ( usia < 0) {
		hasil = "Tidak bisa memasukkan nilai negatif";
  }
    else if  ( denyut < 0) {
		hasil = "Tidak bisa memasukkan nilai negatif"; 
    }
  
   document.tform.hsl.value=hasil;

  var id_select_kelamin=
    document.getElementById("select_kelamin")
  var id_select_cek=
    document.getElementById("select_cek")
}
