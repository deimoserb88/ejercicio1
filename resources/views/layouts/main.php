<?php 
function head(){
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AVeSe</title>
    <link rel="stylesheet" href="/resources/css/bootstrap.min.css" type="text/css">
    <!-- <link rel="stylesheet" href="/resources/css/styles.css" type="text/css"> -->
</head>
<body>
   <div id="app" class="container mw-100">
            <div class="row bg-dark text-light">
                <div class="col-md-8">
                    <h2>Agencia de vehículos seminuevos</h2>
                </div>
                <div class="col-md-4 text-right">
                    <img src="/resources/images/ppw.png" class="my-1 mr-3" style="height:40px;">
                </div>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">AVeSen</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/resources/views/inicio.php">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu" data-filtro="todos" href="#">Ver todos los vehículos</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Vehículos
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item menu" data-filtro="auto" href="#">Autos</a>
                        <a class="dropdown-item menu" data-filtro="sub" href="#">Sub's</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Otros</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Vehículos acuáticos (próximamente)</a>
                </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                </form>
            </div>
            </nav>           
                
<?php 
} 
function foot(){
?>

   </div> 
   <div class="modal" id="modal-foto"></div>
    <script src="/resources/js/jquery.min.js" type="text/javascript"></script>
    <script src="/resources/js/popper.min.js" type="text/javascript"></script>
    <script src="/resources/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/resources/js/app.js"></script>
</body>
</html>

<?php } ?>