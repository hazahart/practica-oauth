<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
        <div class="container">
            <a class="navbar-brand" href="#">Práctica OAuth</a>
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow border-0 rounded-4">
                    <div class="card-header text-center bg-white border-0 pt-4 pb-0">
                        <h4 class="mb-0">Perfil de Usuario: {{ Auth::user()->name }}</h4>
                    </div>
                    
                    <div class="card-body text-center p-4">
                        @if(Auth::user()->avatar)
                            <img src="{{ Auth::user()->avatar }}" alt="Avatar del usuario" class="rounded-circle shadow-sm mb-3" width="130" height="130" style="object-fit: cover; border: 4px solid #fff;">
                        @else
                            <img src="https://ui-avatars.com/api/?name={ urlencode(Auth::user()->name) }}&background=random" alt="Avatar por defecto" class="rounded-circle shadow-sm mb-3" width="130" height="130">
                        @endif

                        <h2 class="card-title fw-bold mb-1">{{ Auth::user()->name }}</h2>
                        
                        <p class="text-muted mb-3">{{ Auth::user()->email }}</p>

                        <span class="badge rounded-pill bg-primary px-3 py-2 mb-4" style="font-size: 0.9rem;">
                            Autenticado vía: <strong>{{ ucfirst(Auth::user()->provider) }}</strong>
                        </span>

                        <hr class="text-muted">

                        <form action="{{ route('logout') }}" method="POST" class="mt-3">
                            @csrf
                            <button type="submit" class="btn btn-outline-danger w-100 rounded-pill">
                                Cerrar Sesión
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>