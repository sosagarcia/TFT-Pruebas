<html>
 <head>
                        <!--index.php--> 
 </head>
 <body>

  <!--GPIO17--> 
  <form action="" method="post">
   GPIO 18&nbsp;<input type="submit" name="encender18" value="Encender">
   <input type="submit" name="apagar18" value="Apagar">
   <input type="submit" name="parpadear18" value="Parpadear">



 <br><a class="btn" href="../Main/categorias/acciones.html"> Volavesr</a>

 


 </body>
</html>

<?php

// Funciones PHP del pin GPIO 17

  if ($_POST[encender18]) { 
   $a- exec("sudo python /var/www/html/TFT-Pruebas/LED/18/parpadea.py");
   echo $a;
  }

  if ($_POST[apagar18]) { 
   $a- exec("sudo python /var/www/html/TFT-Pruebas/LED/18/parpadea.py");
   echo $a;
  }

  if ($_POST[parpadear18]) { 
   $a- exec("sudo python /var/www/html/TFT-Pruebas/LED/18/parpadea.py");
   echo $a;
  }
?>