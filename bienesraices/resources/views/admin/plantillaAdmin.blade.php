<!--  Header -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fresh Housing</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>

    <header class="header">
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
                    <nav class="navegacion">
                        <a href=" {{ route('admin.base') }} ">Panel de control</a>
                        <a href="  ">A</a>
                        <a href=" ">B</a>
                        <a href="  ">C</a>
                    </nav>
                </div>

        </div>
    </header>


<!--Termina Header y Barra navegación-->

<!--  Contenido -->

@yield('contenido')


<!--Pie de Pagina-->
<footer class="footer seccion">
    <div class="contenedor contenedor-footer">
        <nav class="navegacion">
            <a href=" {{ route('admin.base') }} ">Panel de control</a>
            <a href=" ">A</a>
            <a href=" ">B</a>
            <a href=" ">C</a>
        </nav>
    </div>
    <p class="copyright">Tecnologías Frescas Todos los derechos Reservados <?php  echo date('Y');?> &copy;</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
<!--js del darkmode-->
<script src="/js/bundle.min.js"></script>
</body>
</html>
