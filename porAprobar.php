<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>

    <body onload="getExatecPendientes();">
        <div class="container-fluid">
            <div class="row fondoGris">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <br><br>
                    <h3 class="azul center">
                        Exatecs por Aprobar
                    </h3>

                    <table class="table table-striped" id="exatecTable">
                        <thead>
                        <tr>
                            <td>Nombre</td>
                            <td>Correo Electrónico</td>
                            <td>Matrícula</td>
                            <td>Grado de Egreso</td>
                            <td>Teléfono Personal</td>
                            <td>Empresa</td>
                            <td>Validar</td>
                        </tr>
                        </thead>
                        <tbody id="tbody"></tbody>
                        <div id="respuesta"></div>
                    </table>
                </div>
                <div class="col-lg-1"></div>
        </div>
    </body>
</html>

<script>

    function getExatecPendientes(){

        $.ajax({
            url: "phpScripts/getExatecPendientes.php",
            type:'GET',
            dataType: "json",
            success: function (response) {
                var exatecs = response
                exatecs.forEach( function(valor, indice, array) {
                    console.log("En el índice " + indice + " hay este valor: " + valor.nombre);
                    $('#tbody').append('<tr><td>'+valor.nombre+'</td><td>'+valor.email+'</td><td>'+valor.matricula+'</td><td>'+valor.gradoEgreso+'</td><td>'+valor.telefono+'</td><td>'+valor.empresa+'</td><td><button type="button" onclick="validarExatec('+valor.id+');" class="btn btn-primary">Validar</button></td></tr>')
                });
                
            }
        });
    }

    function validarExatec(idexatec){
        var data = {
            'idexatec':idexatec
        }
        console.log(data);

        $.ajax({
            url: "phpScripts/validarExatec.php",
            data: {'idexatec':idexatec}, 
            cache: false,
            type: 'POST',
            success: function (response) {
                if (response == 1){
                    $('#respuesta').html('<div class="alert alert-primary" role="alert">El Exatec se ha validado con éxito</div>');
                    $("#exatecTable > tbody").html("");
                    getExatecPendientes();
                }
            }
        });
    }

    
</script>