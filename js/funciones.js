var titulo = "";
var resultado = null;
var videoId = new Array();
var audio = null;
var ant = 0;

var caracteres = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k'];


function convertir(pos) {
    $(document).ready(function () {

        if (audio != null) {
            audio.pause();
            audio = null;
        }

        var cadenas = "";

        for (var i = 1; i < 10; i++) {
            cadenas = cadenas + caracteres[parseInt(Math.random() * 10 + 1)] + parseInt(Math.random() * 10 + 1);
        }

        //formateamos la url del mp3.
        var url = "http://82.223.0.69/easymusic/temporal/temporal-" + cadenas + ".mp3";

        //mostramos el cargando
        $("#cargando").css("display", "block");
        $(".container").css("display", "none");

        var uriConvertir = "http://82.223.0.69/" +
                "easymusic/convertir.php?videoId=" + videoId[pos] + "&temporal=" + cadenas;

        //obtenemos el listado con las canciones. 
        $.ajax({
            method: "GET",
            url: uriConvertir
        }).done(function () {

            //almaceno la variable en la sesion.
            localStorage.setItem('url', url);

            audio = new Audio(url);
            audio.load(audio);
            audio.play();

            $("#" + pos + " i").css("display", "block");
            $("#cargando").css("display", "none");
            $(".container").css("display", "block");

            $("#" + ant + " i").css("display", "none");

            //almacenamos el anterior
            ant = pos;
        });

    });
}

/**
 * Buscador usando la api de youtube.
 */
function llenarLista() {
    $(document).ready(function () {

        $(".form-control").bind('keyup', function (event) {

            //obtiene el valor del buscador.
            var texto = document.getElementById("buscar");

            //api de youtube.
            var uri = "https://www.googleapis.com:443/youtube/v3/search?" +
                    "maxResults=50&key=AIzaSyB6GMfiMe7bz2LmMl41u66ACTUQVjyIW3w&q=" + this.value + "&part=snippet";

            //ponemos datos en la tabla.
            var fila = document.getElementById("fila");

            $(".table").attr("style", "display:none");

            if (this.value != "") {

                //obtenemos el listado con las canciones.
                $.ajax({url: uri}).done(function (result) {

                    var filas = "";

                    for (var i = 0; i < result.items.length; i++) {
                        filas += "<tr onclick='convertir(\"" + i + "\");' id='" + i + "'><td>" + result.items[i].snippet.title + '<i style="float:right;display:one;" class="fas fa-star"></i>' + "</td></tr>";
                        videoId[i] = result.items[i].id.videoId;
                    }
                    $("tbody").html(filas);

                });

                //mostramos la tabla llenadola.
                $(".table").attr("style", "display:table");
            }
        });
    });
}
