<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cine Iker - Home</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Como nuestra raiz empieza en public esta seria la ruta-->
    <link rel="stylesheet" href="assets/css/home.css">
</head>
<body>
<!-- Navbar -->
<header>
    <nav class="navbar navbar-expand-lg navbar-custom shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#"><i class="fas fa-film me-2"></i>Cine Iker</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarOpciones" aria-controls="navbarOpciones" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fas fa-bars" style="color:#f5f2e7;"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarOpciones">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link " href="../index.php?page=register"><i class="fas fa-home me-1"></i>Inicio Sesion</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-video me-1"></i>Películas</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-door-open me-1"></i>Salas</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-ticket-alt me-1"></i>Reservas</a></li>
                    <li class="nav-item"><a class="nav-link" href="/public/index.php"><i class="fas fa-user-plus me-1"></i>Registrar</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- Carrusel -->
<div id="peliculasCarrusel" class="carousel slide mt-4" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">

            <div class="carousel-caption d-none d-md-block">
                <h5>Película Destacada</h5>
                <p>¡No te la pierdas!</p>
                <a href="#" class="btn btn-primary-custom">Ver más</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://via.placeholder.com/1200x400?text=Próximos+Estrenos" class="d-block w-100" alt="Próximos estrenos">
            <div class="carousel-caption d-none d-md-block">
                <h5>Próximos Estrenos</h5>
                <p>Consulta la cartelera</p>
                <a href="#" class="btn btn-primary-custom">Ver más</a>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#peliculasCarrusel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#peliculasCarrusel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>
<section class="container mt-5">
    <h2 class="mb-4 text-center text-dark">Cartelera</h2>
    <div class="row">
        <!-- Película 1 -->
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Titulo</h5>
                    <p class="card-text">Duración</p>
                    <a href="#" class="btn btn-primary-custom">Ver detalles</a>
                </div>
            </div>
        </div>
        <!-- Película 2 -->
        <div class="col-md-4 mb-3">
            <div class="card">
                
                <div class="card-body">
                    <h5 class="card-title">Titulo</h5>
                    <p class="card-text">Duración</p>
                    <a href="#" class="btn btn-primary-custom">Ver detalles</a>
                </div>
            </div>
        </div>
        <!-- Película 3 -->
        <div class="col-md-4 mb-3">
            <div class="card">
              
                <div class="card-body">
                    <h5 class="card-title">Titulo</h5>
                    <p class="card-text">Duración</p>
                    <a href="#" class="btn btn-primary-custom">Ver detalles</a>
                </div>
            </div>
        </div>
        <!-- Película 4 -->
        <div class="col-md-4 mb-3">
            <div class="card">
               
                <div class="card-body">
                    <h5 class="card-title">Titulo</h5>
                    <p class="card-text">Duración</p>
                    <a href="#" class="btn btn-primary-custom">Ver detalles</a>
                </div>
            </div>
        </div>
        <!-- Película 5 -->
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Titulo</h5>
                    <p class="card-text">Duración</p>
                    <a href="#" class="btn btn-primary-custom">Ver detalles</a>
                </div>
            </div>
        </div>

        <!-- Película 6 -->
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Titulo</h5>
                    <p class="card-text">Duración</p>
                    <a href="#" class="btn btn-primary-custom">Ver detalles</a>
                </div>
            </div>
        </div>

        <!-- Película 7 -->
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Titulo</h5>
                    <p class="card-text">Duración</p>
                    <a href="#" class="btn btn-primary-custom">Ver detalles</a>
                </div>
            </div>
        </div>

        <!-- Película 8 -->
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Titulo</h5>
                    <p class="card-text">Duración</p>
                    <a href="#" class="btn btn-primary-custom">Ver detalles</a>
                </div>
            </div>
        </div>

        <!-- Película 9 -->
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Titulo</h5>
                    <p class="card-text">Duración</p>
                    <a href="#" class="btn btn-primary-custom">Ver detalles</a>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="pt-5 pb-3" style="background: linear-gradient(135deg, #5D4037, #8D6E63); color: #fff;">
  <div class="container">
    <div class="row">
      <!-- Info Cine -->
      <div class="col-md-4 mb-4">
        <h4 class="fw-bold">Cine Iker</h4>
        <p>Disfruta de la magia del cine con nuestras películas, estrenos y promociones.</p>
      </div>
      <!-- Estrenos -->
      <div class="col-md-4 mb-4">
        <h5 class="fw-semibold">Estrenos</h5>
        <marquee behavior="scroll" direction="up" scrollamount="3" height="100px">
          <p>Spider-Man: No Way Home</p>
          <p>Dune: Parte Dos</p>
          <p>Avatar: El Camino del Agua</p>
          <p>Oppenheimer</p>
        </marquee>
      </div>
      <!-- Redes sociales -->
      <div class="col-md-4 mb-4">
        <h5 class="fw-semibold">Síguenos</h5>
        <div class="d-flex gap-3 mt-2">
          <a href="#" style="color: #FFECB3; font-size: 1.5rem;"><i class="fab fa-facebook-f"></i></a>
          <a href="#" style="color: #FFECB3; font-size: 1.5rem;"><i class="fab fa-twitter"></i></a>
          <a href="#" style="color: #FFECB3; font-size: 1.5rem;"><i class="fab fa-instagram"></i></a>
          <a href="#" style="color: #FFECB3; font-size: 1.5rem;"><i class="fab fa-youtube"></i></a>
        </div>
      </div>
    </div>
    <hr style="border-color: #D7CCC8;">
    <div class="row">
      <div class="col text-center">
        <small>&copy; 2025 Cine Iker. Todos los derechos reservados.</small>
      </div>
    </div>
  </div>
</footer>
<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


