<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="img/logo.jpg">
    <title>S-CAKE</title>
</head>
<body>
<!-- navbar -->
<div class="navbar">
    <div class="navbar-central">
        <!-- navbar lado izquierdo -->
        <div class="navbar-izquierdo">
            <img src="img/logo.png" alt="">  
            <a href="#home" class="boton-navbar-izquierdo">S-CAKE</a>
        </div>
        <!-- navbar lado derecho -->
        <div class="navbar-derecho">
            <a href="#acerca" class="boton-navbar-derecho">Nosotros</a>
            <a href="#productos" class="boton-navbar-derecho">Pasteles</a>
            <a href="#pedidos" class="boton-navbar-derecho">Pedidos</a>
            <a href="#contacto" class="boton-navbar-derecho">Contacto</a>
            <a href="#ubicacion" class="boton-navbar-derecho">Ubicación</a>
        </div>
    </div>
</div>
<!-- header -->
<header class="contenedor-fondo-pastel">
    <img src="img/fondo pastel.jpg" alt="">
    <div class="titulo-pagina">
        <h1>S-CAKE</h1>
        <h2>Descubrir amor propio</h2>
        <img src="img/logo.jpg" alt="">
    </div>
    
</header>        
<!-- contenido de la pagina -->
<div class="contenedor-contenido" id="acerca">
    <div class="subcontendor-contenido">
        <div class="columna-img">
            <img src="img/pastel columna.jpg" alt="">
        </div>
        <div class="contenido-acerca">
            <h1>Acerca de nosotros</h1>
            <h5>Innovando el sabor</h5>
            <p>
                S-CAKE naciò en querer transformar la resignacion en amor. Y asì comenzamos a hacer postres convertidos en POESIA.
                Iniciamos haciendo postres buscando que lo que hicieramos tuviera un sentido para nsotros , que nuestros postres
                hicieran una diferencia en el dìa de alguien; que fuera un recordatorio de amor. 
                Creemos profundamente que el amor hace una diferencia en el mundo.
                
            </p>

            <h1>Valores</h1>
            <ul>
                <li>Puntualidad</li>
                <li>Excelencia</li>
                <li>Pasión</li>
                <li>Lealtad</li>
            </ul>


        </div>

    </div>
</div>
<!-- contenedor mision vision -->

<div class="contenedor-mision-vision">
    <div class="contenedor-mision">
        <h1>Misión</h1>
        <p>
            Nuestra misión es ofrecer productos de calidad con el sabor que
            que pueda fortalecer la unión familiar, nuestros pasteles son
            elaborados de forma artesanal, con amor a la reposteria y deseamos
            transmitir a nuestros clientes, así mismo queremos ofrecer variedad
            con el mejor servicio para ganar la confiaza de nustros queridos clientes.     

        </p>
    </div>
    <div class="contenedor-vision">
        <h1>Visión</h1>
        <p>
            Nuestro objetivo principal es ser lider en el mercado artesanal de la pasteleria
            en el Estado de México y asi poder expandir nuestros sabores por el resto del país,
            Ser la opción preferida de nuestros amigos y clientes, superando siempre sus expectativas 
            de sabor, calidad y servicio

        </p>
    </div>

</div>

<h1 class="titulo-productos" id="productos">Catálogo de Productos</h1>

<!-- contenedor sabores pastel -->
<figure class="contenedor_tarjetas" id="pasteles">
    <div class="tarjeta">
        <div class="icon"> <img src="img/chocolate.jpg"></div>
        <div class="titules">
            <h3 class="heads">Pastel <br> Chocolate</h3>
            <p class="textos">Pastel hecho a base de tres diferentes tipos de chocolate. </p>
        </div>
        
    </div>
    <div class="tarjeta">
        <div class="icon"> <img src="img/fresas.jpg"></div>
        <div class="titules">
            <h3 class="heads">Pastel <br> Fresa</h3>
            <p class="textos">Pastel de sabor fresa cubierta de chantilly, decorado con fresas naturales.</p>
        </div>
    </div>
    <div class="tarjeta">
        <div class="icon"> <img src="img/tres leches.jpg"></div>
        <div class="titules">
            <h3 class="heads">Pastel <br> Tres leches</h3>
            <p class="textos">Pastel sabor tres leches extremadamente dulce.</p>
        </div>
    </div>
    <div class="tarjeta">
        <div class="icon"> <img src="img/zanahoria.jpg"></div>
        <div class="titules">
            <h3 class="heads">Pastel <br>Zanahoria</h3>
            <p class="textos">Pastel de sabor zanahoria, comerlo en exceso puede traer consecuencias como el crecimiento de orejas y bigotes. </p>
        </div>
    </div>
    <div class="tarjeta">
        <div class="icon"> <img src="img/naranja.jpg"></div>
        <div class="titules">
            <h3 class="heads">Pastel <br>Naranja</h3>
            <p class="textos">pastel de sabor naranja con vitaminas c para los resfriados</p>
        </div>
    </div>
</figure>
<!-- contenedor cafe -->
<figure class="contenedor_tarjetas">
    <div class="tarjeta">
        <div class="icon"> <img src="img/americano.jpg"></div>
        <div class="titules">
            <h3 class="heads">Café<br>Americano</h3>
            <p class="textos">Expresso diluido en agua caliente para tratar de igualarlo en características a un café de filtro.</p>
        </div>
        
    </div>
    <div class="tarjeta">
        <div class="icon"> <img src="img/expreso.jpg"></div>
        <div class="titules">
            <h3 class="heads">Café<br>Expresso</h3>
            <p class="textos">El espresso es un tipo de café originario de Italia y que debe su nombre a la cafetera con la que se prepara (cafetera espresso).</p>
        </div>
    </div>
    <div class="tarjeta">
        <div class="icon"> <img src="img/cappuccino.png"></div>
        <div class="titules">
            <h3 class="heads">Café<br>Cappuchino</h3>
            <p class="textos">Expresso al que se le añade leche emulsionada y en la que encontraremos, 1 cm de crema de leche.</p>
        </div>
    </div>
    <div class="tarjeta">
        <div class="icon"> <img src="img/con leche.jpg"></div>
        <div class="titules">
            <h3 class="heads">Café<br>Con leche</h3>
            <p class="textos">Expresso al que se le añade la misma cantidad de leche </p>
        </div>
    </div>
    <div class="tarjeta">
        <div class="icon"> <img src="img/latte.jpg"></div>
        <div class="titules">
            <h3 class="heads">Café<br>Latte Art</h3>
            <p class="textos">El Latte Art es una técnica que se utiliza para la realización de dibujos en la superficie del café.</p>
        </div>
    </div>
</figure>

<!-- contenedor Pedidos -->
<h1 class="titulo-productos" id="pedidos">Pedidos</h1>
<div class="contenedor-contacto" >
    <form action="" target="_blank">
        <p><input class="formulario" type="text" placeholder="Nombre"></p>
        <p><input class="formulario" type="text" placeholder="Teléfono" maxlength="10"></p>
        <p><input class="formulario" type="text" placeholder="Dirección"></p>
        <p><input class="formulario" type="datetime-local" placeholder="Date and time" required name="date"></p>
        <p><input class="formulario" type="text" placeholder="Pedido" required name="Message"></p>
        <p><button class="boton-formulario" type="submit">Hacer pedido</button></p>
    </form>
</div>


<!-- contenedor Contacto -->

<div class="contenedor-contacto" id="contacto">
    <h1>Contacto</h1>
    <p>Nos encontramos en la plaza lecaroz av. sta Elena, Villas de cuautitlan; CP 54857 Local No. 08</p>
    <p>Abrimos en un horario de 09:00 a.m. hasta las 8:00 p.m.</p>
    <p>Tel. 5515063457</p>
    <p>Correo: s-cake@gmail.com </p>

    
</div>


<h1 class="titulo-productos" id="ubicacion">Ubicación</h1>

<div class="contenedor-mapa">
    <iframe src="https://www.google.com/maps/place/Plaza+Lecaroz/@19.6733297,-99.1624434,15z/data=!4m5!3m4!1s0x0:0x280259e32ffc71af!8m2!3d19.6733555!4d-99.1625888"></iframe>
</div>


<!-- Footer -->
<footer class="footer">
    <p>Todos los derechos reservados, S - CAKE S.A. de C.V.</p>
    
  </footer>
  



    
</body>
</html>