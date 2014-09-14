<?php
session_start();
if (isset($_SESSION['LOGIN']))
{
    echo '<script>location.href = "paneladmin.php";</script>'; 
}
else
{
?>

<?php
include("header_login_admin.php");
?>
        <center>
         
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h5 class="text-center">
                        Beats On Life</h5>
                         <div id="result"></div>
                    <form class="form form-signup" role="form" Smethod="post"  action="return false" onsubmit="return false" name="frm"  >
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="fa fa-user"></span></span>
                            <input type="text" class="form-control" name="user"  id="user" placeholder="Usuario"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="fa fa-lock"></span></span>
                            <input type="password" id="pass" name="pass" class="form-control" placeholder="Contrase&ntilde;a" />
                        </div>
                    </div>
                </div>
              <button class="btn btn-contact" onclick="Validar(document.getElementById('user').value, document.getElementById('pass').value);">ENTRAR</button>
              
<br>
               <br>

               <p style="text-align:center;"><a href="register.php">¿Nuevo Usuario? ¡Regístrate!</a></p>
               <p style="text-align:center;"><a href="register.php">Recuperar Contraseña</a></p>
               </form>
               <script>
        function Validar(user, pass)
        {
            $.ajax({
                url: "validate.php",
                type: "POST",
                data: "user="+user+"&pass="+pass,
                success: function(resp){
                    $('#result').html(resp)
                }        
            });
        }
        </script>




        
            </div>
                 </div>
    </div>
</div>
</div> 
                </center> 	
           </div>
</body>
</html>
<?php
}
?>