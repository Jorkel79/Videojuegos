<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conócenos</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos personalizados -->
    <style>
        body {
            background: linear-gradient(to bottom, #8e44ad, #ffffff);
            color: #333;
        }
        .navbar {
            background-color: #6c3483;
        }
        .navbar-brand, .nav-link {
            color: #ffffff !important;
        }
        .card {
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-title {
            color: #6c3483;
        }
        footer {
            background-color: #6c3483;
            color: #ffffff;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">Videogames TEAM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="./index.php">Inicio</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Section: Conócenos -->
    <section class="container my-5">
        <div class="text-center mb-5">
            <h1 class="display-4">Conócenos</h1>
            <p class="lead">Somos un equipo apasionado por la tecnología y la innovación.</p>
        </div>

        <div class="row">
            <!-- Jorge Raúl -->
            <div class="col-md-4">
                <div class="card">
                    <img src="./images/images/persona.jpg" class="card-img-top" alt="Foto de Jorge Raúl">
                    <div class="card-body text-center">
                        <h5 class="card-title">Jorge Raúl</h5>
                        <p class="card-text">Especialista en desarrollo backend con una pasión por la arquitectura de software robusta y escalable.</p>
                    </div>
                </div>
            </div>

            <!-- Jose Alfredo -->
            <div class="col-md-4">
                <div class="card">
                    <img src="./images/images/persona.jpg" class="card-img-top" alt="Foto de Jose Alfredo">
                    <div class="card-body text-center">
                        <h5 class="card-title">Jose Alfredo</h5>
                        <p class="card-text">Experto en front-end, amante del diseño intuitivo y la experiencia de usuario impecable.</p>
                    </div>
                </div>
            </div>

            <!-- Diego Canto -->
            <div class="col-md-4">
                <div class="card">
                    <img src="./images/images/persona.jpg" class="card-img-top" alt="Foto de Diego Canto">
                    <div class="card-body text-center">
                        <h5 class="card-title">Diego Canto</h5>
                        <p class="card-text">Ingeniero DevOps, enfocado en la automatización y la integración continua para entregar software de calidad.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-light py-4">
        <div class="container text-center">
            <p>&copy; 2024 Nuestra Empresa. Todos los derechos reservados.</p>
        </div>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
