 
<LINK REL=StyleSheet HREF="css/styles.css" TYPE="text/css" MEDIA=screen>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!-- Include the above in your HEAD tag -->

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<div class="main">
    
    
    <div class="container">
<center>
<div class="middle">
      <div id="login">
        <form >
          <fieldset class="clearfix">
          
            <input type="hidden" name="action" value="login">
            <p ></span><input type="text"  name="txtusuario" Placeholder="Usuario"></p> <!-- JS because of IE support; better: placeholder="Username" -->
            <p></span><input type="password" name="txtpassword"  Placeholder="Contraseña" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
            
             <div>
          <span style="width:48%; text-align:left;  display: inline-block;"><a class="small-text" href="#">Solicitar Acceso?</a></span>

          <span style="width:50%; text-align:right;  display: inline-block;"><input type="submit" value="Ingresar" onclick="ajax_post();"></span>
                            </div>
          </fieldset>
<div class="clearfix"></div>
        </form>
        <div class="clearfix"></div>
      </div> <!-- end login -->
      <div class="logo">CLARO
          
          <div class="clearfix"></div>
      </div>
      
      </div>
      
</center>
    </div>
</div>

<div id="info"></div>

<script type = "text/javascript">

var resultado = document.getElementById("info");


function ajax_post()

{

  var xmlhttp;
// ESQUEMA
  if(window.XMLHttpRequest){
    xmlhttp = new XMLHttpRequest();
  }else{
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

  }
// FIN ESQUEMA
  var a = document.getElementById("txtusuario").value;
  var b = document.getElementById("txtpassword").value;
  var informacionDelUsuario = "nombre=" + a + "&apellido=" + b;  


  xmLhttp.onreadystatechange = function() {


    if(xmLhttp.readyState === 4 && xmLhttp.status === 200){
var mensaje = xmlhttp.responseText;
resultado.innerHTML = mensaje;
    

     }
  }

  xmlhttp.open("POST","php/servidor.php",true);
  xmlhttp.setRequestHeader("content-type","application/x-www-form-urlencoded");
  xml.send(informacionDelUsuario);
}


</script>
