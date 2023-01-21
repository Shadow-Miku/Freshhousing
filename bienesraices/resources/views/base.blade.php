<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices Base</title>
    <link rel="stylesheet" href="build/css/app.css">
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
                        <a href=" {{ route('nosotros') }} ">Nosotros</a>
                        <a href=" {{ route('anuncios') }} ">Anuncios</a>
                        <a href=" {{ route('blog') }} ">Blog</a>
                        <a href=" {{ route('contacto') }} ">Contacto</a>
                    </nav>
                </div>
                
            </div> <!--.barra-->
        </div>
    </header>

    <main class="contenedor seccion">
        <h1>Titulo Página</h1>
    </main>

    <footer class="footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href=" {{ route('nosotros') }} ">Nosotros</a>
                <a href=" {{ route('anuncios') }} ">Anuncios</a>
                <a href=" {{ route('blog') }} ">Blog</a>
                <a href=" {{ route('contacto') }} ">Contacto</a>
            </nav>
        </div>

        <p class="copyright">Tecnologias Frescas Todos los derechos Reservados 2023 &copy;</p>
    </footer>

    <!--js del darkmode-->
    <script src="/js/bundle.min.js"></script>
</body>
</html>