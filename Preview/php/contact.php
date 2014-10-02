
<?php
include("header_no_active.php");
?>
 <div class="body-wrapper1">
            <br>
            <hr>
           <h2> CONTACTE A  <strong> BEATS ON LIFE</strong></h2>
            <hr> 
             <div class="contact row">

               
          

            <div class="col-md-6">
                  <div id="cinfo">
                  <li><br><i class="fa fa-home"></i><address>
                        <strong>Dirección</strong><br>
                        Avenida Aguilares 218<br>
                        Centro Urbano Libertad<br>
                        San Salvador, SV <BR>
                        <br>
                        <strong>Teléfono</strong>
                        <i class="fa fa-phone"></i><br>
                        <abbr title="Phone">T:</abbr>
                        (503) 7443-2342
                        <br>
                        <br>
                        <strong>Correo</strong>
                        <i class="fa fa-envelope"></i><br>
                        beatsonlife@outlook.com
                        <br>
                    </address>
                       </li>
                  </div>
                </div> 

                 <div class="col-md-1" >        
           <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.9138893900263!2d-89.20481200000003!3d13.723662999999979!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f6330813f89e61f%3A0xcb93eef8cc8c07e1!2sInstituto+Tecnico+Ricaldone+(I.T.R.)!5e0!3m2!1ses-419!2ssv!4v1405629430177" frameborder="0" style="border:0"></iframe>
                 </div>


          </div>
        

  </div>               


           <div class="body-wrapper2">
            <br>
            <hr>
           <center> <h2 class="ab-2"><strong>FORMULARIO</strong> DE CONTACTO</h2> </center>
            <hr> 
         
            <form action="send_mail.php" method="post" enctype="multipart/form-data" id="cformu">
              <li>
                <label for="name">Nombre completo:</label>
                <br> 
                <input type="text" id="nombre" name="nombre" value="" placeholder=" Tu nombre" required="required" />
              </li>
               <li>
                <label for="issue">Asunto:</label>
                <br>
                <input type="issue" id="issue" name="issue" value="" placeholder="Tema de comentario" required="required"/>
              </li>
                <li>
                <label for="email">Correo electrónico:</label>
                <br>
                <input type="email" id="email" name="email" value="" placeholder=" Correo Electrónico" required="required"/>
              </li>
                 <br><br>
                <label for="" id="mensaje">Mensaje:</label>
                <br>
                
               <textarea id="message" name="message" placeholder="Escribe tu mensaje aquí..." required="required"></textarea>
                <br>
                <center><button type="submit" class="btn btn-default" id="submit" name="phpmailer"> <i class="fa fa-send"></i> Submit</button></center>
             </form>

           </div>


<?php
include("header_footer_home.php");
?>