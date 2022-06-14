function hitungtpg(){
  var tinggimama=parseFloat (document.tform.tm.value);
  if(isNaN(tinggimama))
    tinggimama = 0.0;
  var tinggipapa=parseFloat (document.tform.tp.value);
  if(isNaN(tinggipapa))
    tinggipapa = 0.0;
  var id_select_kelamin = document.getElementById("select_kelamin");  
  var kelamin = "";
  var minimum;
  var maximum;
  var unknown = "Silahkan masukkan nilai yang benar";
  
  if(id_select_kelamin.value == "l"){
    minimum = (tinggimama + 13 + tinggipapa)/2 - 8.5
    maximum = (tinggimama + 13 + tinggipapa)/2 + 8.5
  }
  else if(id_select_kelamin.value == "p"){
     minimum = (tinggimama - 13 + tinggipapa)/2 - 8.5
     maximum = (tinggimama - 13 + tinggipapa)/2 + 8.5
  }

  if(tinggimama < 0 || tinggimama === 0.0) {
    document.getElementById("mini").innerHTML = unknown;
    document.getElementById("maxi").innerHTML = unknown;
  }
	else if( tinggipapa < 0 || tinggipapa === 0.0) {
    document.getElementById("mini").innerHTML = unknown;
    document.getElementById("maxi").innerHTML = unknown;
  }
  else{
    document.getElementById("mini").innerHTML = minimum;
    document.getElementById("maxi").innerHTML = maximum;
  }
}