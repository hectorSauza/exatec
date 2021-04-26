
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>

    <body>
        <div class="container-fluid">
            <div class="row fondoGris">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                <br><br>
                <h3>
                    Registro Networking EXATEC
                </h3><br>
                <p>
                    Bienvenido al Networking EXATEC.    <br>
                    Te esperamos los miércoles cada 15 días a las 7:30 de la mañana.<br>
                </p>

                <ul>
                    <li>- Presenta tu negocio en 30 seg. </li>
                    <li>- Ven a conocer lo que hacen tus colegas. </li>
                    <li>- Genera grupos y fomenta tus relaciones de trabajo a largo plazo. </li>
                    <li>- Consume EXATEC. </li>
                </ul>

                <p>
                El correo de acceso se enviará el un día antes de la sesión. Y está sujeto a validar matrículas. <br>
                Se dará preferencia a aquellos que envíen la información completa y en formato profesional.<br>

                <a href="https://bit.ly/31dgBHn">Aviso de Privacidad</a><br><br>

                Invitan: <br>
                <a href="https://www.facebook.com/CAPITALEXATEC/" target="_blank" class="azul ">CAPITALEXATEC</a><br>
                <a href="https://www.facebook.com/groups/EXATECEmprendedores/" target="_blank" class=" azul">ExatecEmprendedores</a><br>

                </p>

                <p class="rojo">*Campo Obligatorio</p>
                </div>
            </div>
            

            <div class="row fondoGris">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <form id="registro" >
                    <div class="row">
                        <div class="col-lg-3">
                            <p><br>Dirección de correo electrónico<span class="rojo">*</span> 
                                <input type="text" class="form-control" name="email" id="email" placeholder="Tu Respuesta">
                            </p>
                        </div>

                        <div class="col-lg-3">
                            <p><br>Nombre completo<span class="rojo">*</span> 
                                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Tu Respuesta">
                            </p>
                        </div>

                        <div class="col-lg-3">
                            <p><br>Matricula del TEC<span class="rojo">*</span> 
                                <input type="text" class="form-control" name="matricula" id="matricula" placeholder="Tu Respuesta">
                            </p>
                        </div>

                        <div class="col-lg-3">
                            <p>Dirección de correo electrónico EXATEC
                                <input type="text" class="form-control" name="email_exatec" id="email_exatec" placeholder="Tu Respuesta">
                            </p>
                        </div>
                         
                    </div>

                    <div class="row">
                        <div class="col-lg-3">
                        <p><br><br>Grado de egreso <span class="rojo">*</span> 
                            <select id="gradoEgreso" name="gradoEgreso" class="form-control">
                                <option value="">Seleccione Opción</option>
                                <option value="carrera">Carrera</option>
                                <option value="maestria">Maestría</option>
                                <option value="doctorado">Doctorado</option>
                            </select>
                        </p>
                        </div>

                        <div class="col-lg-3">
                            <p><br><br>¿Cómo te enteraste del evento?<span class="rojo">*</span> 
                            <select id="enteraste" name="enteraste" class="form-control">
                                <option value="">Seleccione Opción</option>
                                <option value="Redes sociales de EXATECs">Redes sociales de EXATECs</option>
                                <option value="Por el TEC">Por el TEC</option>
                                <option value="Me lo compartieron amigos o conocidos EXATECs">Me lo compartieron amigos o conocidos EXATECs</option>
                                <option value="Otros">Otros</option>
                            </select>
                            </p>
                        </div>

                        <div class="col-lg-3">
                            <p><br>¿Nos puedes compartir el nombre de la persona que te invitó?
                                <input type="text" name="invito" class="form-control" id="invito" placeholder="Tu Respuesta">
                            </p>
                        </div>

                        <div class="col-lg-3">
                            <p><br> Teléfono Personal (este no se publicará)<span class="rojo">*</span> 
                                <input type="text" name="telefono" class="form-control" id="telefono" placeholder="Tu Respuesta">
                            </p>
                       
                        </div>
                         
                    </div>


                    <div class="row">
                        <div class="col-lg-3">
                            <p><br>Nombre de tu empresa, negocio o emprendimiento<span class="rojo">*</span> 
                                <input type="text" class="form-control" id="empresa" name="empresa" placeholder="Tu Respuesta">
                            </p>
                        </div>

                        <div class="col-lg-3">
                            <p><br><br>¿A qué tipo de negocio vas dirigido?<span class="rojo">*</span> 
                                <select id="tipo_negocio" name="tipo_negocio" class="form-control">
                                    <option value="">Seleccione Opción</option>
                                    <option value="B2B">B2B</option>
                                    <option value="B2C">B2C</option>
                                    <option value="Ambos">Ambos</option>
                                </select>
                            </p>
                        </div>

                        <div class="col-lg-3">
                            <p><br><br>Monto anual de facturación (M.N.)
                                <select id="facturacion" name="facturacion" class="form-control">
                                    <option value="">Seleccione Opción</option>
                                    <option value="Menos de 1 millón">Menos de 1 millón</option>
                                    <option value="Entre 1- 3.9 millones">Entre 1- 3.9 millones</option>
                                    <option value="Entre 4 - 10 millones">Entre 4 - 10 millones</option>
                                    <option value="Entre 4 - 10 millones">Entre 4 - 10 millones</option>
                                    <option value="Entre 11 - 30 millones">Entre 11 - 30 millones</option>
                                    <option value="Entre 31 - 100 millones">Entre 31 - 100 millones</option>
                                    <option value="Entre 101 - 200 millones">Entre 101 - 200 millones</option>
                                    <option value="Entre 201 - 350 millones">Entre 201 - 350 millones</option>
                                    <option value="350 millones o más">350 millones o más</option>
                                </select>
                            </p>
                        </div>

                        <div class="col-lg-3">
                            <p><br><br>Antigüedad de la Empresa
                                <select id="antiguedad" name="antiguedad" class="form-control">
                                    <option value="">Seleccione Opción</option>
                                    <option value="En idea de negocio">En idea de negocio</option>
                                    <option value="Menos de 1 año">Menos de 1 año</option>
                                    <option value="Entre 1 y 2 años">Entre 1 y 2 años</option>
                                    <option value="3 a 5 años">3 a 5 años</option>
                                    <option value="6 ó más">6 ó más</option>
                                </select>
                            </p>
                        </div>
                         
                    </div>


                    <div class="row">
                        <div class="col-lg-3">
                        <p><br><br>Alcance
                                <select id="alcance" name="alcance" class="form-control">
                                    <option value="">Seleccione Opción</option>
                                    <option value="Local (Ciudad)">Local (Ciudad)</option>
                                    <option value="Área conurbada">Área conurbada</option>
                                    <option value="Nacional">Nacional</option>
                                    <option value="Internacional">Internacional</option>
                                </select>
                            </p>
                        </div>

                        <div class="col-lg-3">
                            <p><br><br>País de Origen
                                <input type="text" class="form-control"  name="pais"  id="pais" placeholder="Tu Respuesta">
                            </p>
                        </div>

                        <div class="col-lg-3">
                            <p><br><br>Estado en la República Mexicana
                            <select name="estado" name="estado" class="form-control">
                                <option value="no">Seleccione uno...</option>
                                <option value="Aguascalientes">Aguascalientes</option>
                                <option value="Baja California">Baja California</option>
                                <option value="Baja California Sur">Baja California Sur</option>
                                <option value="Campeche">Campeche</option>
                                <option value="Chiapas">Chiapas</option>
                                <option value="Chihuahua">Chihuahua</option>
                                <option value="CDMX">Ciudad de México</option>
                                <option value="Coahuila">Coahuila</option>
                                <option value="Colima">Colima</option>
                                <option value="Durango">Durango</option>
                                <option value="Estado de México">Estado de México</option>
                                <option value="Guanajuato">Guanajuato</option>
                                <option value="Guerrero">Guerrero</option>
                                <option value="Hidalgo">Hidalgo</option>
                                <option value="Jalisco">Jalisco</option>
                                <option value="Michoacán">Michoacán</option>
                                <option value="Morelos">Morelos</option>
                                <option value="Nayarit">Nayarit</option>
                                <option value="Nuevo León">Nuevo León</option>
                                <option value="Oaxaca">Oaxaca</option>
                                <option value="Puebla">Puebla</option>
                                <option value="Querétaro">Querétaro</option>
                                <option value="Quintana Roo">Quintana Roo</option>
                                <option value="San Luis Potosí">San Luis Potosí</option>
                                <option value="Sinaloa">Sinaloa</option>
                                <option value="Sonora">Sonora</option>
                                <option value="Tabasco">Tabasco</option>
                                <option value="Tamaulipas">Tamaulipas</option>
                                <option value="Tlaxcala">Tlaxcala</option>
                                <option value="Veracruz">Veracruz</option>
                                <option value="Yucatán">Yucatán</option>
                                <option value="Zacatecas">Zacatecas</option>
                            </select>
                            </p>
                        </div>

                        <div class="col-lg-3">
                            <p><br><br>Ciudad
                                <input type="text" class="form-control" name="ciudad" id="ciudad" placeholder="Tu Respuesta">
                            </p>
                        </div>
                         
                    </div>

                    <div class="row">
                        <div class="col-lg-3">
                            <p><br><br>Sitio Web<span class="rojo">*</span> 
                                <input type="text" class="form-control" name="website" id="website" placeholder="Tu Respuesta">
                            </p>
                        </div>

                        <div class="col-lg-3">
                            <p><br><br>Red Social de la Empresa
                                <input type="text" class="form-control" name="red_social" id="red_social" placeholder="Tu Respuesta">
                            </p>
                        </div>

                        <div class="col-lg-3">
                            <p><br><br>Teléfono Comercial<span class="rojo">*</span> 
                                <input type="text" class="form-control" name="telefono_comercial" id="telefono_comercial" placeholder="Tu Respuesta">
                            </p>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-6">
                        <p><br><br>Describe brevemente tu Empresa, negocio o emprendimiento<span class="rojo">*</span> 
                               <textarea class="form-control" name="descripcion" id="descripcion"></textarea>
                            </p>
                        </div>   
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <p class="bold"><br><br>Logotipo. Sólo acepta formatos jpg o png<br><br>
                               <input type="file" class="form-control" name="logo" id="logo">
                            </p>
                        </div>   
                        <div class="col-lg-6">
                            <p class="bold"><br><br>Foto de Retrato, para que otros networkers te conozcan. La foto debe ser profesional, en donde salgas sólo. Sólo acepta formatos jpg o png *
                                <input type="file" class="form-control" name="foto" id="foto">
                                </p>
                            </div>   
                        <div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col-lg-6">
                            <p >
                               <input type="checkbox" id="acuerdo1" name="acuerdo1">
                               Estoy de acuerdo que Networking EXATEC, durante el evento presentará la información comercial de mi empresa. <span class="rojo">*</span> 
                                <br><br>
                               <input type="checkbox" id="acuerdo2" name="acuerdo2">
                               He leído y acepto el Aviso de privacidad adjunto.

                            </p>
                        </div>   
                    </div>


                    <div class="row">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-6">
                            <button type="button" onclick="registro();" class="btn btn-primary">Registrarme</button>    
                            <br><br>
                            <div id="respuesta"></div>
                        </div>   
                        <div class="col-lg-4"></div>
                    </div>
                </form>
        </div>  
    </body>
</html>



<script>
    function registro(){
        
        email = $('#email').val();
        matricula = $('#matricula').val();
        gradoEgreso = $('#gradoEgreso').val();
        enteraste = $('#enteraste').val();
        telefono = $('#telefono').val();
        telefono_comercial = $('#telefono_comercial').val();
        empresa = $('#empresa').val();
        descripcion = $('#descripcion').val();
        website = $('#descripcion').val();
        nombre = $('#nombre').val();

        if(email === ''){
            $('#respuesta').html('<div class="alert alert-danger" role="alert">Por favor ingresa tu correo electrónico</div>');
            return;
        }

        if(nombre === ''){
            $('#respuesta').html('<div class="alert alert-danger" role="alert">Por favor ingresa tu nombre</div>');
            return;
        }

        if(matricula === ''){
            $('#respuesta').html('<div class="alert alert-danger" role="alert">Por favor ingresa tu matrícula</div>');
            return;
        }

        if(gradoEgreso === ''){
            $('#respuesta').html('<div class="alert alert-danger" role="alert">Por favor ingresa tu grado de egreso</div>');
            return;
        }

        if(enteraste === ''){
            $('#respuesta').html('<div class="alert alert-danger" role="alert">Por favor ingresa como te enteraste de networking Exatec</div>');
            return;
        }

        if(gradoEgreso === ''){
            $('#respuesta').html('<div class="alert alert-danger" role="alert">Por favor ingresa tu grado de egreso</div>');
            return;
        }


        if(telefono === ''){
            $('#respuesta').html('<div class="alert alert-danger" role="alert">Por favor ingresa tu teléfono personal</div>');
            return;
        }

        if(telefono_comercial === ''){
            $('#respuesta').html('<div class="alert alert-danger" role="alert">Por favor ingresa tu teléfono comercial</div>');
            return;
        }

        if(empresa === ''){
            $('#respuesta').html('<div class="alert alert-danger" role="alert">Por favor ingresa el nombre de tu empresa</div>');
            return;
        }

        if(descripcion === ''){
            $('#respuesta').html('<div class="alert alert-danger" role="alert">Por favor ingresa la descripción de tu empresa</div>');
            return;
        }

        if(website === ''){
            $('#respuesta').html('<div class="alert alert-danger" role="alert">Por favor ingresa el sitio web de tu empresa</div>');
            return;
        }

        if($('#acuerdo1').is(":checked")){
            console.log('ok')
        }else{
            $('#respuesta').html('<div class="alert alert-danger" role="alert">Debes aceptar el acuerdo comercial de Networking Exatec</div>');
            return;
        }


        if($('#acuerdo2').is(":checked")){
            console.log('ok')
        }else{
            $('#respuesta').html('<div class="alert alert-danger" role="alert">Debes aceptar el aviso de privacidad</div>');
            return;
        }

        var datos = $('#registro').serialize();

        
        var form = $('#registro')[0];
        var formData = new FormData(form);

        console.log(formData);

        $.ajax({
            url: "phpScripts/registrar.php",
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            type: 'POST',
            success: function (response) {
                if (response == 1){
                    $('#respuesta').html('<div class="alert alert-primary" role="alert">Hemos recibido tu registro, pronto nos pondremos en contacto contigo</div>');
                    $('#registro').trigger("reset");
                }
            }
    });

    }
</script>

