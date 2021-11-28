<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM citas";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <title> Estetica</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <style>

            option, select{
              font-size: medium;  
            }
            form{
                max-width: 90%;
                display: block;
  margin-right: auto;
  margin-left: auto;
            }


.item1 { grid-area: header; }
.item2 { grid-area: menu; }
.item3 { grid-area: main; 
        align-content: center;
        }
.item4 { grid-area: right; }
.item5 { grid-area: footer; }

.grid-container {
  display: grid;
  grid-template-areas:
    'header header header header header header'
    'menu main main main right right'
    'menu footer footer footer footer footer';
  grid-gap: 10px;
  background-color: #2196F3;
  padding: 10px;
}

.grid-container > div {
  background-color: rgba(255, 255, 255, 0.8);
  text-align: center;
  padding: 20px 0;
  font-size: 30px;
}
</style>
        
    </head>
    <body>
        <div class="grid-container">
  <div class="item1"><h1>Estetica pepito</h1></div>
  <div class="item2">Menu</div>
  <div class="item3">
  
  
  <?php include("cita.php"); ?>
  ><!--
      
      <div>
                    <div class="row"> 
                        
                        <div>
                            <h3>Agendar cita</h3>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="num_cita" placeholder="Número de cita">
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                                    <input type="date" class="form-control mb-3" name="fecha">
                                    <input type="time" class="form-control mb-3" name="hora">

                                    
                                    <div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect03">Servicio:</label>
  </div>
  <select class="custom-select" id="inputGroupSelect03" name="servicio">
    <option selected>Seleccionar</option>
    <option>Corte de cabello dama</option>
    <option>Corte de cabello hombre</option>
    <option>Peinado</option>
    <option>Tratamiento de cabello</option>
    <option>Tinte</option>
    <option>Decolorado</option>
    <option>Uñas postizas</option>
    <option >Pintado de uñas</option>
  </select>
</div>


                                    
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        
                    </div>  
            </div>
  </div>  -->
  <div class="item4">Right</div>
  <div class="item5">Footer</div>
</div>
            
    </body>
</html>