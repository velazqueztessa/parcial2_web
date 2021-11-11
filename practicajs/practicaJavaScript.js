
console.log("Se cargo el archivo de Javascript");

var contador = 0;
      
function sumaContador(){
	contador++;
	console.log(contador);
	document.getElementById("contador").innerHTML = contador;
}