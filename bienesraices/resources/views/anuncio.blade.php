<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fresh Housing Anuncio a</title>
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
                        <a href=" {{ route('nosotros') }} ">Nosotros</a>
                        <a href=" {{ route('anuncios') }} ">Anuncios</a>
                        <a href=" {{ route('blog') }} ">Blog</a>
                        <a href=" {{ route('contacto') }} ">Contacto</a>
                    </nav>
                </div>
                
            </div> <!--.barra-->
        </div>
    </header>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en Venta frente al bosque</h1>

        <picture>
            <source srcset="/img/destacada.webp" type="image/webp">
            <source srcset="/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" src="/img/destacada.jpg" alt="imagen de la propiedad">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">$3,000,000</p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" loading="lazy" src="/img/icono_wc.svg" alt="icono wc">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono"  loading="lazy" src="/img/icono_dormitorio.svg" alt="icono habitaciones">
                    <p>4</p>
                </li>
            </ul>

            <p>Proin consequat viverra sapien, malesuada tempor tortor feugiat vitae. In dictum felis et nunc aliquet molestie. Proin tristique commodo felis, sed auctor elit auctor pulvinar. Nunc porta, nibh quis convallis sollicitudin, arcu nisl semper mi, vitae sagittis lorem dolor non risus. Vivamus accumsan maximus est, eu mollis mi. Proin id nisl vel odio semper hendrerit. Nunc porta in justo finibus tempor. Suspendisse lobortis dolor quis elit suscipit molestie. Sed condimentum, erat at tempor finibus, urna nisi fermentum est, a dignissim nisi libero vel est. Donec et imperdiet augue. Curabitur malesuada sodales congue. Suspendisse potenti. Ut sit amet convallis nisi.</p>

            <p>Aliquam lectus magna, luctus vel gravida nec, iaculis ut augue. Praesent ac enim lorem. Quisque ac dignissim sem, non condimentum orci. Morbi a iaculis neque, ac euismod felis. Fusce augue quam, fermentum sed turpis nec, hendrerit dapibus ante. Cras mattis laoreet nibh, quis tincidunt odio fermentum vel. Nulla facilisi.</p>
        </div>
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

        <p class="copyright">Tecnologías Frescas Todos los derechos Reservados 2023 &copy;</p>
    </footer>

    <!--js del darkmode-->
    <script src="/js/bundle.min.js"></script>
</body>
</html>