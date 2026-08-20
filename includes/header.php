<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Inscripción de Cursos'; ?></title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    
    <style>
        .hero-section {
            /* Capa transparente oscura neutra sobre la imagen (sin tinte azul) */
            background: linear-gradient(
                rgba(0, 0, 0, 0.65), 
                rgba(0, 0, 0, 0.65)
            ), 
            url('img/banner.jpg') no-repeat center center;
            background-size: cover;
        }

        .card-course {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .card-course:hover {
            transform: translateY(-4px);
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100 bg-light">