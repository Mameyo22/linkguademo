
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
        var usrid = $("#userid").val();

        var datastring = "nombre=" + nombre + "&email=" + email + "&mensaje=" + msg + "&usrid=" + usrid;
        $.ajax({
            url:"grabar.php", 
            method: "POST",
            data: datastring, 
            cache: false, 
            success:function(result){
                //Limpiar el form
                $("#nombre").val("");
                $("#email").val("");
                $("#msg").val("");
                $("#userid").val("0");
                //Mostrar los ingresados
                mostrar("");
            }
        });
    });
    $("#limpiar").click(function(){
                //Limpiar el form
                $("#nombre").val("");
                $("#email").val("");
                $("#msg").val("");
                $("#userid").val("0");
    });

    $("#NomAsc").click(function(){
        var datastring = "orderby=NOMBRE&orden=asc";
        mostrar(datastring);
    });
    $("#NomDes").click(function(){
        var datastring = "orderby=NOMBRE&orden=desc";
        mostrar(datastring);
    });

    $("#EmailAsc").click(function(){
        var datastring = "orderby=Email&orden=asc";
        mostrar(datastring);
    });
    $("#EmailDes").click(function(){
        var datastring = "orderby=Email&orden=desc";
        mostrar(datastring);
    });
    //Borrar
    $("#datos").on("click",".borrar*", function(){
        var id = this.id;
        id = id.substring(1);
        $.ajax({
            url:"borrar.php",
            method:"POST",
            cache:false,
            data: "id="+id,
            success:function(result){
                mostrar();
            }
        })
    });
    //Editar
    $("#datos").on("click",".editar*", function(){
        var id = this.id;
        id = id.substring(1);
        $.ajax({
            url:"leer.php",
            method:"POST",
            cache:false,
            data: "id="+id,
            success:function(result){
                //pasar el resultado a array
                var res = result.split(",");
                //asignar los valores
                $("#nombre").val(res[0]);
                $("#email").val(res[1]);
                $("#msg").val(res[2]);
                $("#userid").val(res[3]);
            }
        })
    });

});



