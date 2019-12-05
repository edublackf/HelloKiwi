<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
	
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página Frutería</title>
    <link rel="shortcut icon" href="img/kiwi.png" type="image/x-icon">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  
  <body>      
    <?php
    if (isset($_SESSION['loggedin'])) {  
    }
    else {
        echo "<div class='alert alert-danger mt-4' role='alert'>
        <h4>Necesitas crear una cuenta para navegar en esta página</h4>
        <p><a href='login.html'>Cree una ahora!</a></p></div>";
        exit;
    }
    
    ?>

    <header>
        <nav>
            <a href="edit-profile.php"><strong>Inicio</strong></a>
            <a href="productos.html"> <strong>Productos</strong> </a>
            <a href="restaurantes.html"> <strong>Restaurantes</strong> </a>
            <a href="registrar.html"> <strong>Regístrate</strong> </a>
            <a href="logout.php"> <strong>Cerrar Sesión</strong> </a>
        </nav>
        <section class="textos-header">
            <h1>Bienvenido <?php echo $_SESSION['name']; ?></h1>
            <h1>Tus pedidos más rápidos que nunca</h1>
            <h2>Gracias a nosotros</h2>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #fff;"></path>
            </svg></div>
    </header>
    <main>
        <section class="contenedor sobre-nosotros">
            <h2 class="titulo">Nuestra Visión y Misión</h2>
            <div class="contenedor-sobre-nosotros">
                <img src="img/ilustracion2.jpg" alt="" class="imagen-about-us">
                <div class="contenido-textos">
                    <h3><span>1</span>Visión</h3>
                    <p>LLegarémos a ahorrarle el tiempo a las personas que les encanta comer alimentos saludables
                    ,pero sin perder lo sabroso de los alimentos, asi como su tiempo.
                    </p>
                    <h3><span>2</span>Misión</h3>
                    <p>Nos encargaremos, mediante nuestros servicios, de ahorrar el tiempo de las personas, ya sea 
                    que ésta compre su alimento o bebida anticipadamente o al momento, el cliente estará ahorrando 
                    tiempo en largas colas y al momento de pagar.
                    </p>
                </div>
            </div>
        </section>
        <section class="clientes contenedor">
            <h2 class="titulo">Nosotros</h2>
            <div class="cards">
                <div class="card">
                    <img src="img/face1.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Eduardo Black</h4>
                        <p>Alumno del instituto Tecsup, segundo ciclo 2019-ll, apasionado por el ping pong.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/face2.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Fernando Valdivia</h4>
                        <p>Alumno del instituto Tecsup, segundo ciclo 2019-ll, apasionado por la tecnología.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-services">
            <div class="contenedor">
                <h2 class="titulo">Nuestros servicios</h2>
                <div class="servicio-cont">
                    <div class="servicio-ind">
                        <img src="img/ilustracion1.jpg" alt="">
                        <h3>Restaurantes</h3>
                        <p>Te ofrecemos los mejores restaurantes y establecimientos de comida</p>
                    </div>
                    <div class="servicio-ind">
                        <img src="img/ilustracion1.jpg" alt="">
                        <h3>Productos</h3>
                        <p>Los mejores productos,de excelente calidad a buen precio, aquí</p>
                    </div>
                    <div class="servicio-ind">
                        <img src="img/ilustracion1.jpg" alt="">
                        <h3>Mas restaurantes </h3>
                        <p>No tenemos mas ideas para poner servicios, lamentamos la falta de personal</p>
                    </div>
                </div>
            </div>
            <div>
                <p><a href="edit-profile.php"> Volver arriba</a></p>
            </div>            
        </section>
    </main>
    <footer>
        <div class="contenedor-footer">
            <div class="content-foo">
                <h4>Correo Valdivia</h4>
                <p>luis.valdivia.m@tecsup.edu.pe</p>
            </div>
            <div class="content-foo">
                <h4>Teléfono</h4>
                <p>987654321</p>
            </div>
            <div class="content-foo">
                <h4>Correo Black</h4>
                <p>eduardo.black@tecsup.edu.pe</p>
            </div>
        </div>
        <h2 class="titulo-final">&copy; Valdivia M. | Black F.</h2>
    </footer>

	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

	</body>
</html>