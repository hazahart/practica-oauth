<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login con OAuth 2.0</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .btn-discord { background-color: #5865F2; color: white; }
        .btn-discord:hover { background-color: #4752C4; color: white; }
        .btn-twitch { background-color: #9146FF; color: white; }
        .btn-twitch:hover { background-color: #772CE8; color: white; }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow-sm text-center p-4">
                    <h2 class="mb-3">Inicia Sesión</h2>
                    <p class="text-muted mb-4">Práctica de OAuth 2.0 y OpenID Connect</p>
                    
                    <a href="{{ route('social.redirect', 'discord') }}" class="btn btn-discord btn-lg mb-3">
                        <i class="bi bi-discord"></i> Iniciar sesión con Discord
                    </a>

                    <a href="{{ route('social.redirect', 'twitch') }}" class="btn btn-twitch btn-lg">
                        <i class="bi bi-twitch"></i> Iniciar sesión con Twitch
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>