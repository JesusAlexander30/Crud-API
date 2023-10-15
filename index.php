<!DOCTYPE html>
<html>
<head>
    <title>CRUD en PHP</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <script src="jquery.min.js"></script>
</head>

<body>
<section class="photo" id="inicio">
  <div class="nav" id="sticker">
  <label for="toggle">&#9776</label>
  <input type="checkbox" id="toggle" />
  <div class="menu">
    <h5 class="logo">EXPRESS RENIEC</h5>
    <a href="#inicio">inicio</a>
    <a href="#servicio">servicios</a>
    <a href="#trabajo">información</a>
    <a href="#content">Consulta Aquí</a>
  </div>
</div>
  <div class="photo-text">
  <h4 data-ix="skype">BIENVENIDOS A CONSULTA Y REGISTRO DNI</h4>
  <p data-ix="subtitle-hero-up">
¡Bienvenido a nuestro sistema de registro de DNI! Aquí podrás ingresar tu número de identificación y completar tu perfil con la información necesaria. Estamos comprometidos a brindarte un proceso rápido y seguro. Si tienes alguna pregunta, no dudes en contactarnos.</p>
    </div>
  <div class="overlay"></div>
</section>
<section class="content">
  <div class="grand-title" id="servicio">
    <h4 data-ix="slowfade-scroll-bigs">¡Explora y aprovecha esta valiosa fuente de información para tus necesidades diarias!</h4>
  </div>
  <div class="text">
    <div class="inner-text">
      <h3 data-ix="slowfade-scroll-bigs">REGISTRO DNI</h3>
      <i class="ic ion-fork"></i>
      <div class="text-box">
        <h5 data-ix="slowfade-scroll-bigs">Te ofrece:</h5>
        <p data-ix="slowfade-scroll-bigs">Guarda tu información y busca de manera facil tus datos por tu DNI.</p>
      </div>
    </div>
    <div class="inner-text">
      <h3 data-ix="slowfade-scroll-bigs">Consulta DNI</h3>
      <i class="ic ion-knife"></i>
      <div class="text-box">
        <h5 data-ix="slowfade-scroll-bigs">Te ofrece:</h5>
        <p data-ix="slowfade-scroll-bigs">Ingresa tu DNI de manera sencilla con nuestro sistema.</p>
      </div>
    </div>
    <div class="inner-text">
      <h3 data-ix="slowfade-scroll-bigs">Consultas Diarias</h3>
      <i class="ic ion-spoon"></i>
      <div class="text-box">
        <h5 data-ix="slowfade-scroll-bigs">Te ofrece:</h5>
        <p data-ix="slowfade-scroll-bigs">Consultas Diarias a cada momento que requieras.</p>
      </div>
    </div>
  </div>
  <div class="inner-content">
    <div class="boxy"></div>
    <div class="boxy">
      <div id="slider">
        <figure>
          <ul>
            <li>
              <h4>Asesoría</h4>
              <img src="img/descarga3.png" alt="" />
              <p>Ofrece servicios de asesoramiento y orientación a los usuarios que no posean DNI o deseen otros tipos de trámites</p>
            </li>
            <li>
              <h4>Modernización</h4>
              <img src="img/descarga2.jpg" alt="" />
              <p>Ha implementado sistemas y herramientas tecnológicas avanzadas para facilitar algunos servicios y procesos de manera online</p>
            </li>
            <li>
              <h4>Control</h4>
              <img src="img/descarga3.jpeg" alt="" />
              <p>Monitorea el seguimiento de tus trámites por la plataforma de la RENIEC</p>
            </li>
            <li>
              <h4>Reniec</h4>
              <img src="img/descarga4.jpeg" alt="" />
              <p>Encargada de la identificación de las personas. Emite el Documento Nacional de Identidad (DNI) </p>
            </li>
          </ul>
        </figure>
      </div>
    </div>
  </div>

  <section class="portafolio" id="trabajo">
    <h4 data-ix="slowfade-scroll-bigs">Otra información</h4>
    <div class="portafolio-container">
      <section class="portafolio-item">
        <img src="img/reniec.jpg" alt="" class="portafolio-img" />
        <section class="portafolio-text">
          <h5>RENIEC</h5>
          <p>La RENIEC, Registro Nacional de Identificación y Estado Civil en Perú, es el organismo encargado de identificar a los ciudadanos y mantener registros vitales. Emiten el Documento Nacional de Identidad (DNI) y certificados de nacimiento, matrimonio y defunción, fundamentales para trámites legales y administrativos en el país.</p>
        </section>
      </section>
      <section class="portafolio-item">
        <img src="img/000105036M.jpg" alt="" class="portafolio-img"/>
        <section class="portafolio-text">
          <h5>DNI</h5>
          <p>
El Documento Nacional de Identidad (DNI) es un documento oficial y obligatorio en Perú. Se otorga a los ciudadanos para identificación y diversos trámites legales y administrativos. Contiene información personal como nombre, fotografía, firma y datos biométricos, garantizando la autenticidad y seguridad de la identidad de cada individuo.
</p>
        </section>
      </section>
      <section class="portafolio-item">
        <img src="img/consulta-dni-reniec-665x475.jpg" alt="" class="portafolio-img"/>
        <section class="portafolio-text">
          <h5>Portal Reniec</h5>
          <p>El portal de la RENIEC ofrece servicios para trámites de identificación y estado civil en Perú, como solicitud de documentos, consulta de actas y actualización de datos, facilitando gestiones legales y administrativas.</p>
        </section>
      </section>
    </div>
    <h4 data-ix="slowfade-scroll-bigs">Consulta y Registro DNI</h4>
    
    </section>
  
</section>

<div id="content-box">
  <div id="profile-image">
    <img src="img/perfil1.jpg" alt="Imagen de perfil" width="100" height="100">
  </div>
  <div id="content">
    <title>DNI</title>
    <input type="text" id="dni" autocomplete="off" name="dni">
    <button id="prueba">Consultar</button>
    <br><br>
    <div>Nombres: <label id="nombre"></label></div>
    <div>Apellido Paterno.: <label id="apellidop"></label></div>
    <div>Apellido Materno.: <label id="apellidom"></label></div>
  </div>
</div>

<script>
    
$("#prueba").click(function(){
  var dni=$("#dni").val();
  $.ajax({           
    type:"POST",
    url: "consulta-dni-ajax.php",
    data: 'dni='+dni,
    dataType: 'json',
    success: function(data) {
        if(data==1) {
            alert('El DNI tiene que tener 8 dígitos');
        } else {
            console.log(data);
            $("#nombre").html(data.nombres);
            $("#apellidop").html(data.apellidoPaterno);
            $("#apellidom").html(data.apellidoMaterno);
        }
    }
});
})
</script>
<script src="script.js"></script>

<?php
// Incluir el archivo de conexión a la base de datos
include 'database.php';
?>

<div class="container">
    <div class="form-container form1">
        <h3>Formulario para insertar registros</h3>
        <form method="post" action="crud.php">
            <input type="text" name="nombre" placeholder="Nombre">
            <input type="text" name="apellido" placeholder="Apellido">
            <input type="text" name="direccion" placeholder="Dirección">
            <input type="text" name="dni" placeholder="DNI">
            <input type="text" name="telefono" placeholder="Teléfono">
            <button type="submit" name="submit">Agregar Registro</button>
        </form>
    </div>

    <hr>

    <div class="form-container form2">
        <h3>Formulario para actualizar registros</h3>
        <form method="post" action="crud.php">
            <input type="text" name="id" placeholder="ID a actualizar">
            <input type="text" name="nombre" placeholder="Nuevo nombre">
            <input type="text" name="apellido" placeholder="Nuevo apellido">
            <input type="text" name="direccion" placeholder="Nueva dirección">
            <input type="text" name="dni" placeholder="Nuevo DNI">
            <input type="text" name="telefono" placeholder="Nuevo teléfono">
            <button type="submit" name="update">Actualizar Registro</button>
        </form>
    </div>

    <hr>

    <div class="form-container form3">
        <h3>Formulario para eliminar registros</h3>
        <form method="post" action="crud.php">
            <input type="text" name="id" placeholder="ID a eliminar">
            <button type="submit" name="delete">Eliminar Registro</button>
        </form>
    </div>

    <hr>

    <div class="form-container form4">
        <h3>Formulario para consultar registros por DNI</h3>
        <form method="post" action="crud.php">
            <input type="text" name="dni_consulta" placeholder="DNI a consultar">
            <button type="submit" name="consultar">Consultar Registro</button>
        </form>
    </div>
</div>

</body>
</html>