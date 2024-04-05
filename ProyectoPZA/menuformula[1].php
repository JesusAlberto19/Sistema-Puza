<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style_general.css">
    <title>Menú Formula de productos</title>
</head>
<body>

 <header>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <h1 class="display-4">Puza</h1>
              <p class="lead">Sistema de inventario</p>
            </div>
          </div>
 </header>

    <div class="container">
    <nav aria-label="breadcrumb"> </nav> 
    </div>
    
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="menu.php">Menu</a></li>
        <li class="breadcrumb-item"><a href="menumatprim.php">Materias primas</a></li>
        <li class="breadcrumb-item"><a href="menuprodterm.php">Productos terminados</a></li>
        <li class="breadcrumb-item"><a href="menuclientes.php">Clientes</a></li>
        <li class="breadcrumb-item"><a href="menuprove.php">Proveedores</a></li>
      </ol> 
    </nav>

      <h3 class="text-center">Formula</h3>
        <div class="row">
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Realiza formula</h5>
                  <p class="card-text">Realiza formula de productos</p>
                  <a href="matprimC.php" class="btn btn-primary">Acceder</a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Mostrar productos consultados</h5>
                  <p class="card-text">Muestra los productos que se hayan realizado con la formula de productos</p>
                  <a href="#" class="btn btn-primary">Acceder</a>
                </div>
              </div>
            </div>
            
            
        <div class="row w-100 align-items-center">
          <div class="col text-center">
            <a href="menu.php" class="btn btn-primary">Regresar</a> 
          </div>
        </div>
    </div>
    
</body>
</html>