<?php
        if(!isset($_SESSION))
          session_start();


        header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
        header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); // Fecha en el pasado
        header('Access-Control-Allow-Origin: *');

        $videoId = $_GET['videoId'];
        $temporal = $_GET['temporal'];

           
        //creamos el directorio del usuario.
        @mkdir("/var/www/html/easymusic/temporal/", 0777);
        
        //convertimos el video de youtube a mp3.
        $comando = 'youtube-dl -x --audio-format mp3 --output "/var/www/html/easymusic/temporal/temporal-'.$temporal.'.%(ext)s" https://www.youtube.com/watch?v='.$videoId;
        $salida = shell_exec($comando);

        //almacenamos el nombre del archivo para borrarlo al principio.
        $_SESSION['nombre_archivo'] = "temporal-".$temporal.".mp3";

        $comando = 'rm -Rf '.$_SESSION['nombre_archivo'];

        $salida_borrar = shell_exec($comando);

        echo json_encode($salida);

