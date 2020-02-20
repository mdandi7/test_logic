<!DOCTYPE html>
<html>
<head>
	<title>test logic</title>
</head>
<body>

<h3>NO. 3 = <div id="no3"></div></h3>

<h3>NO. 1 = <div id="no1"></div></h3>
<p id="a"></p>
<button onclick="kecil()">kecil</button>
<button onclick="besar()">besar</button>
<p id="no2"></p>

</body>
<script>
function balikKata(kata) {
	var kalimat = '';
  	for (var i = kata.length-1; i >= 0; i--) {
    kalimat = kalimat + kata[i];
  }
  if (kata == kalimat) {
  	return true;	
  } else return false;
  return kalimat;
}

document.getElementById('no3').innerHTML = balikKata('tidak');
</script>

<script type="text/javascript">
// function loop(number) {
	var text ='';
	for (var i=1; i<=15; i++) {
		text += i ;

	}
	document.getElementById('no1').innerHTML = text;
// }
</script>


<script>
var points = [20, 54, 13, 5, 25, 10];
document.getElementById("no2").innerHTML = points;  

function kecil() {
  points.sort(function(a, b){return a - b});
  document.getElementById("no2").innerHTML = points;
}

function besar() {
  points.sort(function(a, b){return b - a});
  document.getElementById("no2").innerHTML = points;
}
</script>

</html>