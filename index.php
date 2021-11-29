
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <title> Estetica</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <style>

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

  <div class="item4">Right</div>
  <div class="item5">Footer</div>
</div>
            
    </body>
</html>