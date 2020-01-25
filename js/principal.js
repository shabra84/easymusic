$(document).ready(function () {
    
    //boton play
    $('.fa-play').click(function () {
        
        var url = localStorage.getItem('url');
        
        audio.load(new Audio(url));
        audio.play();
    });
    //boton stop
    $('.fa-stop').click(function () {
        audio.pause();
    });

});