<!--  Header -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fresh Housing</title>
    <link rel="icon" href="/images/icons/Fresh%20housing.png" type="image/png">
    <link rel="stylesheet" href="/css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    @laravelPWA
</head>
<body>

    <header class="header <?php echo $inicio ?  'inicio' : '' ;?>">
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
                        <a href=" {{ route('nosotros') }} ">Nosotros</a>
                        <a href=" {{ route('publicaciones.index') }} ">Anuncios</a>
                        <a href=" {{ route('blog.indexpub') }} ">Bolsa de trabajo</a>
                        <a href=" {{ route('contacto.create') }} ">Contacto</a>
                    </nav>
                </div>


            </div> <!--.barra-->

            <?php if($inicio) { ?>
            <h1>Venta y renta de inmuebles</h1>
            <?php } ?>

        </div>
    </header>


<!--Termina Header y Barra navegación-->

<!--  Contenido -->

@yield('contenido')


<!--Pie de Pagina-->
<footer class="footer seccion">
    <div class="contenedor contenedor-footer">
        <nav class="navegacion">
            <a href=" {{ route('nosotros') }} ">Nosotros</a>
            <a href=" {{ route('publicaciones.index') }} ">Anuncios</a>
            <a href=" {{ route('blog.indexpub') }} ">Blog</a>
            <a href=" {{ route('contacto.create') }} ">Contacto</a>
        </nav>
    </div>
    <p class="copyright">Tecnologías Frescas Todos los derechos Reservados <?php  echo date('Y');?> &copy;</p>
</footer>

<!--js del darkmode-->
<script src="/js/bundle.min.js"></script>
</body>
</html>
