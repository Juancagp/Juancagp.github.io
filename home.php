<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="homestyle.css">

  </head>

  <body>
    <!--------------------------navbar-------------------------->
    <div class="container-fluid ">
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
            <a class="navbar-brand" href="#">
                <img src="img-1.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
                SilverLife
              </a>

             
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            
              <ul class="navbar-nav ml-auto mt-2 mt-lg-0 text-center">
                
                <li class="nav-item">
                  <a class="nav-link" href="para_ti.html">Para Tí!</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link " href="#">Mi Perfil</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link " href="index.html">Cerrar sesión</a>
                </li>
              </ul>
              
            </div>
          </nav>
    </div>
    <!------------------------fin navbar------------------------>


    <!--------------------------Reservar-------------------------->
    <div class="container-fluid suscribir d-flex flex-column justify-content-center align-items-center">
        <div class="text-center text-white">

            <h1 class="display-4">Bienvenido! <?php echo "Usuario"?> Alguna actividad que te interese?</h1>

        </div>
        <form action="" class="form-inline flex-column flex-sm-row">
            <div class="form-group mr-sm-3">
                <input type="text" placeholder="Deporte" class="form-control">
            </div>
            <div class="form-group mr-sm-3">
                <input type="text" placeholder="Comuna" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Buscar">
            </div>
        </form>
    </div>
    <!--------------------------Fin Reservar-------------------------->






    <!--------------------------Contenido-------------------------->
<div class="container my-5">
    <div class="card-columns">
        <div class="card text-center">
          <img class="card-img-top" src="img-1.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Actividades al Aire libre</h5>
            <p class="card-text">Actividad al aire libre para estirar los huesos y liberar esa tensión de estar siempre estático.</p>
            <a href="info_actividad.html" class="btn btn-primary">Ver más</a>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
        <div class="card text-center">
          <img class="card-img-top" src="ajedres.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Juegos de mesa</h5>
            <p class="card-text">Ven a explotar tus habilidades cognitivas con diversos juegos de mesa.</p>
            <a href="info_actividad_2.html" class="btn btn-primary">Ver más</a>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
        <div class="card text-center">
          <img class="card-img-top" src="libro.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Club de lectura</h5>
            <p class="card-text">Unetenos a un entretenido encuentro lector donde nos adentraremos en diversos libros que te explotaran la mente, no literalmente.</p>
            <a href="info_actividad_2.html" class="btn btn-primary">Ver más</a>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>

        <div class="card text-center">
            <img class="card-img-top" src="img-1.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Actividad al aire libre</h5>
              <p class="card-text">Actividad al aire libre para estirar los huesos y liberar esa tensión de estar siempre estático.</p>
              <a href="#" class="btn btn-primary">Suscribete</a>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
          <div class="card text-center">
            <img class="card-img-top" src="ajedres.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Juegos de mesa</h5>
              <p class="card-text">Ven a explotar tus habilidades cognitivas con diversos juegos de mesa.</p>
              <a href="#" class="btn btn-primary">Suscribete</a>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
          <div class="card text-center">
            <img class="card-img-top" src="libro.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Unetenos a un entretenido encuentro lector donde nos adentraremos en diversos libros que te explotaran la mente, no literalmente..</p>
              <a href="#" class="btn btn-primary">Suscribete</a>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>

        
      </div>

</div>  


    <!--------------------------Fin Contenido-------------------------->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <scrip src="js/bootstrap.min.js"></scrip>
</body>
</html>







