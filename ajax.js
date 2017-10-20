
$(document).ready(function(){
    function mostrar(datastring){
        //refrescar los datos
        $.ajax({
            url:"getlist.php",
            method: "POST",
            data: datastring,
            cache:false,
            success:function(result){
                $("#datos").html(result);
            }
        });
    }

    $("#grabar").click(function(){
        //Obtener las variables para armar el datastring
        var nombre = $("#nombre").val();
        var email = $("#email").val();
        var msg = $("#msg").val();

        var datastring = "nombre=" + nombre + "&email=" + email + "&mensaje=" + msg;
        $.ajax({
            url:"grabar.php", 
            method: "POST",
            data: datastring, 
            cache: false, 
            success:function(result){
                alert(result);
            }
        });
    });

    $("#NomAsc").click(function(){
        var datastring = "orderby=NOMBRE&orden=asc";
        mostrar(datastring);
    });
    $("#NomDes").click(function(){
        var datastring = "orderby=NOMBRE&orden=desc";
        mostrar(datastring);
    });

});



