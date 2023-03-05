

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylos/stylo.css">
    <link rel="stylesheet" href="stylos/fontello.css">
    <link rel="stylesheet" href="stylos/solicitudes.css">
    <link href=https://cdnjs.cloudflare.com/ajax/libs/hamburgers/1.2.1/hamburgers.min.css rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <img  class="logo" src="https://www.taxiastro.pe/wp-content/uploads/2021/02/logo-astro-cabecera.png" alt="">
            <ul class="lista">
               
                <li><a href="index.php">inicio</a></li>
                <li> <a href="">quienes somos</a></li>
                <li><a href="">servicio</a></li>
                <li><a href="contacto.php">contacto</a></li>
                <li><a href="">solicitudes</a></li>

            </ul>
           
            
        </nav>
        <br>
        <button class="hamburger hamburger--collapse" type="button">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
          </button>
        <div class="taxiastro"> 
            <img src="https://www.taxiastro.pe/wp-content/uploads/2021/02/taxi.png" alt="">

        </div>
        <div class="seguridad">
            <h1>tu seguridad nos importa!</h1>
            <p>Somos La Única Empresa De Transporte En Ica En Cumplir Al 100% Con El Protocolo De Bio-Seguridad  COVID-19. </p>
            <br>
            <a href="https://wa.me/51972224099?text=Me%20envia%20un%20taxi%20para:"> <button class="solicitar">solicita tu taxi aqui</button></a>       
        </div>
    </header>
<section class="solicitudes">
<div>
 <form action="contacto.php" id="registro" method="post">
    <h1>Registro De Cliente</h1>
    <input type="text"  name="nombre" class="input-text"placeholder="Nombre Del Cliente">
    <input type="email" name="email" class="input-text"placeholder="Correo Electronico">
    
    <input type="number" name="dni" class="input-text"placeholder="Dni">
    <input type="number" name="telefono" class="input-text"placeholder="Telefono">
    <input type="text" name="ubicacion" class="input-text"placeholder="Punto De Referencia">
    <input type="radio"  name="sexo" value="masculino" class="radio masculino" ><b>Masculino </b>
    <input type="radio" name="sexo" value="femenino" class="radio femenino"><b>Femenino</b>
    <input type="submit"  class="enviar" value="Enviar">
 </form>
</div>
<div class="contenedor-img">
    <img class="img-tiempo" src="https://www.taxiastro.pe/wp-content/uploads/2021/03/taxi-por-hora.png" alt="">
</div>

</section>
</body>

<footer>
    <div>
        <img src="https://www.taxiastro.pe/wp-content/uploads/2021/02/logo-astro-cabecera.png" alt="" srcset="">
        <div>

        </div>
    </div>
    <div>
        <h2>contactenos</h2>
        <p>Email:info@taxiastro.com</p>
        <p>Atención las 24 horas </p>
        <p>056757645 / 056634121 / 972224099</p>
    </div>
    <div>
        <h2>nuestro servicio</h2>
        <div class="contenedor_taxis">
            <div>
        <p>taxi</p>
        <p>taxi por hora </p>
        <p>taxi delivery</p>
    </div>
    <div>
        <p>taxi tours</p>
        <p>reserva de taxi</p>
        <p>pago virtual</p>
    </div>
    </div>
    </div>
</footer>

<script s></script>
</html>