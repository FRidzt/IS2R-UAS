var bb, tb, hasil, bmi, error ;

function hitung() {
	bb = document.getElementById("bb").value;
	tb = document.getElementById("tb").value;
	error = "Silahkan masukkan nilai";
	tb /= 100;
	tb *= tb;
	bmi = bb/tb;
	bmi = bmi.toFixed(1);

	if (bmi <= 18.4) {
		hasil = "BMI anda adalah " + bmi + " (Underweight)";
	} else if (bmi >= 18.5 && bmi <= 24.9) {
		hasil = "BMI anda adalah " + bmi + " (Normal)";
	} else if (bmi >= 25 && bmi <= 29.9) {
		hasil = "BMI anda adalah " + bmi + " (Overweight)";
	} else if (bmi >= 30) {
		hasil = "BMI anda adalah " + bmi + " (Obese)";
	}
	
	if (bb === 0 ) {
		document.getElementById("result").innerHTML = error;
	} else if (tb === 0){
		document.getElementById("result").innerHTML = error;
	}
    
	 else {
		document.getElementById("result").innerHTML = hasil;
	}

  if (bb < 0 || tb < 0) {
		document.getElementById("result").innerHTML = "Tidak bisa memasukkan nilai negatif";
  }

}