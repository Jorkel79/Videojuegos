<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información Personal - Jorkel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(to bottom, #e0f7fa, #b2ebf2, #80deea, #4dd0e1, #26c6da);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center mb-4">Información Personal</h1>
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Campo</th>
                    <th scope="col">Detalle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Nombre</strong></td>
                    <td>Jorge Raúl (Jorkel)</td>
                </tr>
                <tr>
                    <td><strong>Edad</strong></td>
                    <td>22</td>
                </tr>
                <tr>
                    <td><strong>Universidad</strong></td>
                    <td>UTSV</td>
                </tr>
                <tr>
                    <td><strong>Conocimientos</strong></td>
                    <td>PHP, HTML, CSS, LARAVEL, GITHUB, JAVASCRIPT, IONIC</td>
                </tr>
                <tr>
                    <td><strong>Contactos</strong></td>
                    <td>921-310-7823 // dsm20190379j.valencia@utsv.edu.mx</td>
                </tr>
            </tbody>
        </table>
        <div class="text-center">
            <a href="./index.php" class="btn btn-warning">Regresar</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
