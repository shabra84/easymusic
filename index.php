<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Reproductor de música gratis" />

        <!-- estilos -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="estilos/principal.css"/>
        <link href="https://fonts.googleapis.com/css?family=Yesteryear&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="estilos/fontawesome/css/all.min.css"/>
        <link rel="stylesheet" href="estilos/principal.css"/>

        <!-- javascript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="js/principal.js"></script>
        <script src="js/funciones.js"></script>
        
        
        <meta http-equiv="Expires" content="0">
        <meta http-equiv="Last-Modified" content="0">
        <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
        <meta http-equiv="Pragma" content="no-cache">

        <title>easymusic</title>
    </head>
    <body>

        <div id="cargando" width="50" height="50"><img src="load/loading.gif"/></div>
        <div class="container">

            <h1 id="titulo">easymusic</h1>
            <nav class="navbar navbar-expand-lg">
                <div class="" id="">
                    <form class="form-inline my-2 my-lg-0">
                        <input id="buscador" class="form-control" onfocus="llenarLista();" type="search" placeholder="Dime una canción que quieras escuchar..." aria-label="Search">
                    </form>
                </div>

<!--                <div id="alinear">
                    <i class="fas fa-play"></i> 
                    <i class="fas fa-stop"></i>  
               </div>
-->            </nav>


            <table id="tabla" class="table">
                <thead class="thead-dark">
                    <tr>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>

    </body>
</html>
