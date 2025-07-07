<?php
    $rango = session()->get('rank');
    $headerView = 'partials/headers/header_' . $rango;
?>

<!-- Incluimos el encabezado en función del rango del usuario: -->
<?= $this->include($headerView) ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <style>
        video {
  position: fixed;      
  top: 0;
  left: 0;
  width: 100vw;
  height: 100vh;
  object-fit: cover;     
  z-index: -10;   
  filter: brightness(0.5); /* Ajusta el brillo del video */
}
  .Mensaje_Bienvenida {
    position: absolute;
    top: 50%;
    right: 50%;
    transform: translate(75%, -50%);
    color: white;
    z-index: 5;
    width: 620px;
    text-align: center;
    display: flex;
    align-items: center;
    flex-direction: column;
  }

  .Mensaje_Bienvenida h1 {
    font-size: 4rem;
    font-weight: bold;
    margin-bottom: 30px;
    width: 1000px;
    }
    </style>
</head>
<body>

<video src="<?= base_url('assets/video/video_home.mp4')?>" loop autoplay muted></video>
    <div class="Mensaje_Bienvenida">
        <h1>Bienvenido <?=session()->get('nombre') ?></h1>
        <div class=""></div>
        <p> <i>"Esencias Cálidas"</i> es un sistema inteligente que organiza, controla y optimiza cada paso en la creación artesanal de velas, desde los materiales hasta el producto final.</p>
    </div>    
</body>
</html>