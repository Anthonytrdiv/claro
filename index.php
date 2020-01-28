
<LINK REL=StyleSheet HREF="css/styles.css" TYPE="text/css" MEDIA=screen> 
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> Login </h2>
    <h2 class="inactive underlineHover">Registrate</h2>

    <!-- Icon -->
    <div class="fadeIn first">
     <!--  <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" />-->
    </div>

    <!-- Login Form -->
   <form method="POST" action="php/servidor.php">
      <input type="text" id="txtuser" class="fadeIn second" name="txtuser" placeholder="Cuenta">
      <input type="password" id="txtpass" class="fadeIn third" name="txtpass" placeholder="password">
      <input type="submit"  class="fadeIn fourth" >
   
</form>
    <!-- Remind Passowrd -->
    <div id="formFooter">
    <div id="info"></div>
    </div>

  </div>
</div>

<!--Validación Logeo>-->

<script src="js/loginval.js"></script>
