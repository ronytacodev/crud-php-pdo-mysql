 <?php
    include "model/conexion.php";
    $sentencia = $bd->query("SELECT * FROM alumno");
    $alumnos = $sentencia->fetchAll(PDO::FETCH_OBJ);

    ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <title>Lista de alumnos</title>
 </head>

 <body>
     <!-- <?php
            include "model/conexion.php";
            ?> -->

     <div class="container-fluid">
         <h3 class="text-center">Lista de alumnos</h3>
         <table class="table">
             <tr>
                 <td>Código</td>
                 <td>Apellido paterno</td>
                 <td>Apellido materno</td>
                 <td>Nombre</td>
                 <td>Examen Parcial</td>
                 <td>Examen Final</td>
                 <td>Promedio</td>
                 <td>Editar</td>
                 <td>Eliminar</td>
             </tr>

             <?php
                foreach ($alumnos as $dato) {
                    ?>
                 <tr>
                     <td><?php echo $dato->id_alumno ?></td>
                     <td><?php echo $dato->ap_paterno ?></td>
                     <td><?php echo $dato->ap_materno ?></td>
                     <td><?php echo $dato->nombre ?></td>
                     <td><?php echo $dato->ex_parcial ?></td>
                     <td><?php echo $dato->ex_final ?></td>
                     <td><?php echo ($dato->ex_final + $dato->ex_parcial) / 2; ?></td>
                     <td><a href="editar.php?id=<?php echo $dato->id_alumno; ?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
                     <td><a href="eliminar.php?id=<?php echo $dato->id_alumno; ?>"><i class="fa-sharp fa-solid fa-trash"></i></a></td>
                 </tr>
             <?php
                }
                ?>
         </table>

         <!-- inicio INSERT -->
         <h3>Ingresar alumnos:</h3>
         <form action="insertar.php" method="POST">
             <table>
                 <tr>
                     <td>Apellido paterno:</td>
                     <td><input type="text" name="txtPaterno"></td>
                 </tr>
                 <tr>
                     <td>Apellido materno:</td>
                     <td><input type="text" name="txtMaterno"></td>
                 </tr>
                 <tr>
                     <td>Nombre:</td>
                     <td><input type="text" name="txtNombre"></td>
                 </tr>
                 <tr>
                     <td>Nota parcial:</td>
                     <td><input type="text" name="txtParcial"></td>
                 </tr>
                 <tr>
                     <td>Nota final:</td>
                     <td><input type="text" name="txtFinal"></td>
                 </tr>
                 <input type="hidden" name="oculto" value="oculto">
                 <tr>
                     <td><input type="reset" name=""></td>
                     <td><input type="submit" name="" value="Ingresar Alumno"></td>
                 </tr>
             </table>
         </form>

         <!-- fin INSERT -->
     </div>

 </body>

 </html>