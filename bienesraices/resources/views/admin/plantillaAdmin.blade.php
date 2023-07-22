<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fresh Housing</title>
    <link rel="icon" href="/images/icons/Fresh%20housing.png" type="image/png">
    <link rel="stylesheet" href="/css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    @laravelPWA
</head>

<body>
    <div>
        <!-- Barra de navegación -->
        <div class="container-fluid">
            <div class="row flex-nowrap">
                <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                        <div class="d-flex flex-column align-items-center">
                            <span class="fs-5 d-none d-sm-inline">Administrador</span> <br>
                            <img src="{{ auth()->user()->url }}" alt="Profile Picture" width="200" height="200" class="rounded-circle mb-3">
                            <h5 class="fw-bold mb-0">{{ auth()->user()->name }}</h5>
                        </div>
                        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu"> <br>
                            <li>
                                <a href="/" class="nav-link px-0 align-middle">
                                    <i class="fs-4 bi-house-door"></i> <span class="ms-1 d-none d-sm-inline"> Inicio </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('base.editadm', $id = auth()->user()->id) }}" class="nav-link px-0 align-middle">
                                <i class="bi bi-person-gear"></i> <span class="ms-1 d-none d-sm-inline"> Perfil </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.base') }}" class="nav-link px-0 align-middle">
                                <i class="bi bi-info-circle"></i> <span class="ms-1 d-none d-sm-inline"> Información </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('adminUsu.index')}}" class="nav-link px-0 align-middle">
                                <i class="bi bi-person-add"></i> <span class="ms-1 d-none d-sm-inline"> Administrar Usuarios </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('adminbolsadet.index')}}" class="nav-link px-0 align-middle">
                                <i class="bi bi-briefcase"></i><span class="ms-1 d-none d-sm-inline"> Publicaciones Bolsa de trabajo </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('login') }}" class="nav-link px-0 align-middle">
                                    <i class="fs-4 bi-box-arrow-right"></i> <span class="ms-1 d-none d-sm-inline"> Salir </span>
                                </a>
                            </li>
                            <li>
                                <span class="ms-1 d-none d-sm-inline text-muted">Tecnologías Frescas Todos los derechos Reservados <?php echo date('Y'); ?>&copy;</span>
                            </li>
                        </ul>
                        <hr>
                    </div>
                </div>
                <div class="col py-3">
                    <!-- Contenido -->
                    <header class="header <?php echo $inicio ? 'inicio' : ''; ?>">
                        <div class="contenedor contenido-header">
                            <div class="barra">
                                <a href="/">
                                    <img src="/img/logo.svg" alt="Logotipo de Bienes Raices">
                                </a>
                                <div class="mobile-menu">
                                    <img src="/img/barras.svg" alt="icono menu responsive">
                                </div>
                                <div class="derecha">
                                    <img class="dark-mode-boton" src="/img/dark-mode.svg">
                                </div>
                            </div>
                            <?php if ($inicio) { ?>
                            <h1>Venta de Casas y Departamentos Exclusivos de Lujo</h1>
                            <?php } ?>
                        </div>
                    </header>
                    @yield('contenido')
                </div>
            </div>
        </div>
        <!-- Termina Barra de navegación -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"> </script>
        <script src="/js/bundle.min.js"></script>
    </div>
</body>

</html>
