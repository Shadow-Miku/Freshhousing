<!--  Header -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fresh Housing</title>
    <link rel="stylesheet" href="/css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
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
                        <a href=" {{ route('anuncios') }} ">Anuncios</a>
                        <a href=" {{ route('blog') }} ">Blog</a>
                        <a href=" {{ route('contacto') }} ">Contacto</a>
                    </nav>
                </div>


            </div> <!--.barra-->

            <?php if($inicio) { ?>
            <h1>Venta de Casas y Departamentos  Exclusivos de Lujo</h1>
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
            <a href=" {{ route('anuncios') }} ">Anuncios</a>
            <a href=" {{ route('blog') }} ">Blog</a>
            <a href=" {{ route('contacto') }} ">Contacto</a>
        </nav>
    </div>
    <p class="copyright">Tecnologías Frescas Todos los derechos Reservados <?php  echo date('Y');?> &copy;</p>
</footer>

<!--js del darkmode-->
<script src="/js/bundle.min.js"></script>
</body>
</html>
