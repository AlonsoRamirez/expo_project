<?php
include("header_admin.php");
?>
                    <center><h1>ELIMINAR PRODUCTOS</h1></center>
                    <center><hr width="600"></center>
                         
         <center> <p><strong><h2>A continuación, se procede a eliminar el producto deseado de acuerdo a su código de identificación.</h2></p>
</center>
                 <hr>
           <h4 class="delete-id">ID del producto:</h4>
           <br>

            <script type="text/javascript">
       window.onload=function(){
  $('.selectpicker').selectpicker();
       };


      </script>

             <select class="selectpicker btn-success">
      <option>1</option>
      <option>2</option>
      <option>3</option>
  </select>

<br>
  <a class="btn btn-danger btn-lg" href="#" role="button">Eliminar <i class="fa fa-minus-circle"></i> </a>

                  </div>

                 
           </div>

<?php
include("header_footer_admin.php");
?>

