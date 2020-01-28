<html>
    <head>

<title>Bienvenido</title>

    </head>
<body>

<button onclick = "ejecutarAJAX()">Hazme Click</button>
<div id = "info"></div>

<script type="text/javascript">
function ejecutarAJAX()

{
  //   var ajaxRequest;
  //   if(window.XMLHttpRequest){
  //       ajaxRequest = new XMLHttpRequest();
  //   }else{

     //    ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
     //   }

        var ajaxRequest = new XMLHttpRequest();
        ajaxRequest.onreadystatechange = function(){
//0 no inicializada
// 1 peticion establecida
// 2 peticion enviada
// 3 Peticion esta siendo procesada
// 4 ha sido finalizada
            if(ajaxRequest.readyState == 4 && ajaxRequest.status == 200){
                
                document.getElementById("info").innerHTML = ajaxRequest.responseText;

            }

        }
        ajaxRequest.open("GET","documento.txt",true);
        ajaxRequest.send();

}

</script>




</body>
</html>