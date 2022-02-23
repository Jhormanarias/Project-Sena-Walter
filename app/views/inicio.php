<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://kit.fontawesome.com/80c53d6e78.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/styles.css">
  <title>Uzuistore.com</title>
</head>



<body class="d-flex flex-column">
  <!-- header de la tienda -->



  <header class="container-fluid d-flex flex-column">
    <!--parte busquedas -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <img src="../assets/img/Uzuistore blanco.png" id="logo" class="me-5" alt="">
        <div class="navbar-collapse" id="navbarSupportedContent">
          <form class="d-flex">
            <input type="text" class="form-control" id="barra-buscador" placeholder="Buscar productos, marcas y más...." aria-label="Recipient's username" aria-describedby="button-addon2">
            <button class="boton-buscador btn" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
          </form>
        </div>
      </div>
    </nav>
    <!--parte menu -->
    <nav id="menu" class="nav d-flex ">
      <a class="nav-link " href="#">Categorias</a>
      <a class="nav-link" href="#">Ofertas</a>
      <a class="nav-link" href="#">Historial</a>
      <a class="nav-link " href="#">Supermercado</a>
      <a class="nav-link " href="#">Moda</a>
      <a class="nav-link " href="#">Ayuda</a>
      <div id="menu2" class="nav">
        <a class="nav-link " data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Crea tu cuenta</a>
        <a class="nav-link " href="login.php">Ingresa</a>
        <a class="nav-link " href="#">Mis compras</a>
        <a class="nav-link " href="#"><i class="fas fa-shopping-cart"></i></a>
      </div>
    </nav>

  </header>


  <!-- Carrusel -->
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://http2.mlstatic.com/D_NQ_640829-MLA49003525297_022022-OO.webp" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://http2.mlstatic.com/D_NQ_971136-MLA49003525273_022022-OO.webp" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://http2.mlstatic.com/D_NQ_857348-MLA49003488501_022022-OO.webp" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <h3 id="ofertas">Ofertas</h3>
  <div id="cartasofertas">


    <div class="card m-2" style="width: 18rem;">
      <img src="https://http2.mlstatic.com/D_Q_NP_939569-MCO48363983361_112021-AB.webp" class="card-img-top" alt="...">
      <div class="card-body">
        <div>
          <p id="tamañodescuento2" class="card-text">$629.900 </p>
        </div>
        <p id="tamañodescuento" class="card-text">Envío gratis <i class="fas fa-bolt"></i> <strong>FULL</strong></p>
      </div>
    </div>

    <div class="card m-2" style="width: 18rem;">
      <img src="https://http2.mlstatic.com/D_Q_NP_897170-MCO44552267863_012021-AB.webp" class="card-img-top" alt="...">
      <div class="card-body">
        <div>
          <p id="tamañodescuento2" class="card-text">$404.900 </p>
        </div>
        <p id="tamañodescuento" class="card-text">Envío gratis <i class="fas fa-bolt"></i> <strong>FULL</strong></p>
      </div>
    </div>

    <div class="card m-2" style="width: 18rem;">
      <img src="https://http2.mlstatic.com/D_Q_NP_669746-MCO47493116092_092021-AB.webp" class="card-img-top" alt="...">
      <div class="card-body">
        <div>
          <p id="tamañodescuento2" class="card-text">$89.400 </p>
        </div>
        <p id="tamañodescuento" class="card-text">Envío gratis <i class="fas fa-bolt"></i> <strong>FULL</strong></p>
      </div>
    </div>

    <div class="card m-2" style="width: 18rem;">
      <img src="https://http2.mlstatic.com/D_Q_NP_790278-MCO48448060398_122021-AB.webp" class="card-img-top" alt="...">
      <div class="card-body">
        <div>
          <p id="tamañodescuento2" class="card-text">$118.900 </p>
        </div>
        <p id="tamañodescuento" class="card-text">Envío gratis <i class="fas fa-bolt"></i> <strong>FULL</strong></p>
      </div>
    </div>

    <div class="card m-2" style="width: 18rem;">
      <img src="https://http2.mlstatic.com/D_Q_NP_721196-MCO48448042400_122021-AB.webp" class="card-img-top" alt="...">
      <div class="card-body">
        <div>
          <p id="tamañodescuento2" class="card-text">$88.300 </p>
        </div>
        <p id="tamañodescuento" class="card-text">Envío gratis <i class="fas fa-bolt"></i> <strong>FULL</strong></p>
      </div>
    </div>


  </div>



  <!-- Formulario modal de regiatro de usuario -->





  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Registrate</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="insertarusuario.php" method="POST">
            <div class="form-group">

              <label for="">Numero de documento:</label>
              <input type="text" name="id" id="id" class="form-control" placeholder="Ingrese su CC o TI o CE....">

              <label for="">Nombre:</label>
              <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese su Nombre">

              <label for="">Primer Apellido:</label>
              <input type="text" name="apellido1" id="apellido1" class="form-control" placeholder="Ingrese su Primer Apellido">

              <label for="">Segundo Apellido:</label>
              <input type="text" name="apellido2" id="apellido2" class="form-control" placeholder="Ingrese su Segundo Apellido">

              <label for="">E-mail:</label>
              <input type="text" name="email" id="email" class="form-control" placeholder="Ingrese su E-mail">

              <label for="">Direccion:</label>
              <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Ingrese su Direccion">

              <label for="">Ciudad:</label>
              <input type="text" name="ciudad" id="ciudad" class="form-control" placeholder="Ingrese su Ciudad de residencia">

              <label for="">Barrio:</label>
              <input type="text" name="barrio" id="barrio" class="form-control" placeholder="Ingrese su Barrio">

              <label for="">Departamento:</label>
              <input type="text" name="departamento" id="departamento" class="form-control" placeholder="Ingrese su Departamento">

              <label for="">Codigo Postal:</label>
              <input type="text" name="codigopostal" id="codigopostal" class="form-control" placeholder="Ingrese su Codigo Postal">

              <label for="">Pais:</label>
              <input type="text" name="pais" id="pais" class="form-control" placeholder="Ingrese su Pais">

              <label for="">Contraseña:</label>
              <input type="text" name="contraseña" id="contraseña" class="form-control" placeholder="Ingrese su Contraseña">
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Salir</button>
          <button type="submit" class="btn btn-primary">Registrar</button>
          </form>
        </div>
      </div>
    </div>
  </div>




  <!-- final Formulario modal de regiatro de usuario -->

  <!-- Foother -->
  <div class="pie container-fluid">
    <footer class="py-5">
      <div class="row d-flex justify-content-center">
        <div class="col-2">
          <h5>Section</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
          </ul>
        </div>



        <div class="col-4 offset-1">
          <form>
            <h5>Subscribe to our newsletter</h5>
            <p>Monthly digest of whats new and exciting from us.</p>
            <div class="d-flex w-100 gap-2">
              <label for="newsletter1" class="visually-hidden">Email address</label>
              <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
              <button class="btn btn-primary" type="button">Subscribe</button>
            </div>
          </form>
        </div>
      </div>

      <div class="d-flex flex-column align-items-center justify-content-center my-4 border-top">
        <ul class="list-unstyled d-flex justify-content-evenly" style="width: 150px;">
          <li class=""><a class="link-dark" href="#"><i class="fab fa-twitter"></i></a></li>
          <li class=""><a class="link-dark" href="#"><i class="fab fa-instagram"></i></a></li>
          <li class=""><a class="link-dark" href="#"><i class="fab fa-facebook"></i></a></li>
        </ul>
        <p>&copy; 2022 Uzuistore Inc.</p>

      </div>
    </footer>
  </div>












</body>

</html>