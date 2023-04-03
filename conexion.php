<?php

    $dns="localhost";
    $username="root";
    $password="";
    $dbname = "album";



    try {
        $conexion = new PDO("mysql:host=$dns;dbname=$dbname", $username, $password);
        
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexión exitosa ";
      } catch(PDOException $e) {
        echo "Error al conectar: " . $e->getMessage();
      }




      
      $nombre =$_POST["Nombre"];
      $apellido=$_POST["Apellido"];
      $cuidad=$_POST["Ciudad"];
      $genero=$_POST["Genero/Sexo"];
      $email=$_POST["email"];
      echo "<br>" ;
      echo "<br>" ;
      echo "<br>" ;
      echo "<br>" ;
      


      echo " Mí nombre es $nombre $apellido vivo en la cuidad de $cuidad, mi sexo es $genero y me puedes escribir a $email";
   
      echo "<br>"




      // Ejecutar una consulta SQL
// $stmt = $conexion->prepare("SELECT * FROM table");
//  $stmt->execute();
// $resultado = $stmt->fetchAll();

?>


<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>formulario</title>
            <link rel="stylesheet" href="style.css">
        </head>
        <body>
                <div class="contenedor">
                    <form action="conexion.php" method="POST">
                         <input class="cajaTexto" type="sumit" name="Nombre" placeholder="Nombre">
                         <input class="cajaTexto" type="sumit" name="Apellido" placeholder="Apellido">
                         <input class="cajaTexto" type="sumit" name="Ciudad" placeholder="Ciudad">
                         <input class="cajaTexto" type="sumit" name="Genero/Sexo" placeholder="Genero/Sexo">
                         <input class="cajaTexto" type="sumit" name="email" placeholder="email">
                        

                         <button class="boton1" name="Registrar" type="submit">Registrar</button>
                         <button class="boton2" name="Reset" type="reset">Reset</button>


                


                    </form>

                

                </div>
            
        </body>
        </html>


        