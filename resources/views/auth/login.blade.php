<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login con OAuth 2.0</title>
    <style>
        .btn { padding: 10px 20px; color: white; text-decoration: none; border-radius: 5px; display: inline-block; margin: 10px; font-family: sans-serif; }
        .btn-discord { background-color: #5865F2; }
        .btn-twitch { background-color: #9146FF; }
    </style>
</head>
<body>
    <div style="text-align: center; margin-top: 50px;">
        <h2>Inicia Sesión</h2>
        <p>Práctica de OAuth 2.0 y OpenID Connect</p>
        
        <a href="{{ route('social.redirect', 'discord') }}" class="btn btn-discord">
            Iniciar sesión con Discord
        </a>

        <a href="{{ route('social.redirect', 'twitch') }}" class="btn btn-twitch">
            Iniciar sesión con Twitch
        </a>
    </div>
</body>
</html>