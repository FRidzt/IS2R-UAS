var error, selectKelamin, result, hasil;
function hitungKalori() {

  var usia=parseFloat (document.tform.usia.value)
  if(isNaN(usia))
    usia = 0.0;

  var tinggi=parseFloat (document.tform.tinggi.value)
  if(isNaN(tinggi))
    tinggi = 0.0;

  var berat=parseFloat (document.tform.berat.value)
  if(isNaN(berat))
    berat = 0.0;

  
   selectKelamin=document.getElementById ("selectKelamin");
   result=document.getElementById ("result");
   hasil;
   error = "Silakan Masukkan Nilai Yang Benar";
  

  if (selectKelamin.value == "L"){
    hasil = (88.4 + 13,4 * berat) + (4.8 * tinggi) - (5.68 * usia)
  }
  else if (selectKelamin.value == "P"){
    hasil = (447.6 + 9.25 * berat) + (3.10 * tinggi) - (4.33 * usia)
  }

  
  if (usia < 0 || usia === 0) { 
    document.getElementById("result").innerHTML = error;
  }
  else if (tinggi < 0 || tinggi === 0){
    document.getElementById("result").innerHTML = error;
	}
  else if (berat < 0 || berat === 0){
    document.getElementById("result").innerHTML = error;
	}
  else {
    document.getElementById("result").innerHTML = hasil;
  }
}