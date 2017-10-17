$(document).ready(function(){
    $("#grabar").click(function(){
        //Obtener las variables para armar el datastring
        var nombre = $("#nombre").val();
        var email = $("#email").val();
        var msg = $("#msg").val();

        var datastring = "nombre=" + nombre + "&email=" + email + "&mensaje=" + msg;

        $.ajax({
            url:"grabar.php", 
            method: POST,
            data: datastring, 
            cache: false, 
            success:function(result){
                alert("ajax");
            },
            error: function(xhr){
                alert("Ha ocurrido un error: " + xhr.status + " " + xhr.statusText);
            }
        });
    });
    
});

function mostardatos(){
    //leer datos usado ajax, recibe los mismos en formato json



    
}