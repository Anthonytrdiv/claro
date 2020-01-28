
var resultado = document.getElementById("info");

function ajax_post(){

	var xmlhttp;
// ESQUEMA
  if(window.XMLHttpRequest){
    xmlhttp = new XMLHttpRequest();
  }else{
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

  }
// FIN ESQUEMA





var a = document.getElementById("txtpass").value;
var b = document.getElementById("txtuser").value;

var informacionDelUsuario = "txtuser="+a+"&txtpass="+ b;

//var x = document.getElementById("myText").value;

xmlhttp.onreadystatechange = function() {


if(xmlhttp.readyState === 4 && xmlhttp.status === 200){
var mensaje = xmlhttp.responseText;
resultado.innerHTML = mensaje;


 }
}

xmlhttp.open("POST","php/servidor.php", true);
xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xmlhttp.send(informacionDelUsuario);


}