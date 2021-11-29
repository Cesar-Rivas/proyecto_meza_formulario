<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 18px;
  font-weight: bold;
  max-width: min-content;
  color:black
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
  float:left
}

.ayuda_boton{
    max-width: 25px;
}
.ayuda_boton:hover{
    cursor: pointer;
}
.ayuda{
    float: right;
    padding: 10px;
}
</style>
</head>
<body>

<!-- Trigger/Open The Modal -->
<span id="myBtn" class="ayuda"><img class="ayuda_boton" src="https://www.ungranviaje.org/wp-content/uploads/i-interrogante.png" ></span>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">x</span>
    <h3><b>Manual para agendar cita:</b></h3>
    <h5><b>Llene los campos del formulario de la forma que se indica:</b></h5>
    <p style="font-size: medium;">&#9865; En el campo "Nombre" se le pide que introduzca su nombre completo (Nombre(s) y apellido(s))</p>
    
     <p style="font-size: medium;">&#9865; En el campo "Fecha" (dd/mm/aaaa), se le pide que haga click en el ícono de calendario a la derecha
       del recuadro y seleccione una fecha después o igual a:</br> <?php echo date('d-m-y'); ?> . </p>
        <?php 
        date_default_timezone_set('Etc/GMT+7');
        ?>
       <p style="font-size: medium;">&#9865; En el campo "Hora" (--:-- ----), se le pide que haga click en el ícono de reloj a la 
    derecha del recuadro y seleccione la hora en la que desea hacer la cita, la fecha debe ser al menos una hora después de: </br><?php echo date('h:i:a'); ?></p>
  
    <p style="font-size: medium;">&#9865; En el campo "Servicio", se le pide que haga click en el campo, y seleccione uno de los servicios
    disponibles.
    </p>
    <p style="font-size: medium;">&#9865; En el campo "Teléfono de contacto" se le pide que introduzca su télefono de contacto, de la forma: </br>
    Código de area-Prefijo-Número Télefonico (Ejemplo: +52-656-3524282)
    </p>
</div>

</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>