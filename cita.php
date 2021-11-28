
<!DOCTYPE html>
    <head>
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

</style>
        
    </head>
    <body>
        
      <div>
                    <div class="row"> 
                        
                        <div>
                            <h3>Agendar cita</h3>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="num_cita" placeholder="Número de cita">
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                                    <input type="date" class="form-control mb-3" name="fecha">
                                    <input type="time" class="form-control mb-3" name="hora">

                                    <!-- wawa-->
                                    <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect03">Servicio:</label>
                            </div>
                            <select class="form-select" id="inputGroupSelect03" name="servicio">
                                <option selected>Seleccionar</option>
                                <option>Corte de cabello dama</option>
                                <option>Corte de cabello hombre</option>
                                <option>Peinado</option>
                                <option>Tratamiento de cabello</option>
                                <option>Tinte</option>
                                <option>Decolorado</option>
                                <option>Uñas postizas</option>
                                <option>Pintado de uñas</option>
                            </select>
                            </div>


                                    <!--wawa-->
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        
                    </div>  
            </div>
  </div>  
            
    </body>
</html>