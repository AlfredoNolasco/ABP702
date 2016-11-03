<?php
	include("../partials/haed.php")
?>
<main>
 
            <div class="row">

                    <div class="col s12 m3">
                          
                          <div class="card">
                            <div class="card-image img-contenedor">
                              <img src="../../resources/img/pago.Jpg">
                              <span class="card-title">Card Title</span>
                            </div>
                            <div class="card-content">
                              <p>Tenemos la mejor experiencia de todas, en exclusiva para usted.... Tenga el mejor viaje de su vida confie en nosotros</p>
                            </div>
                            
                          </div>

                          <div class="card">
                            <div class="card-image img-contenedor">
                              <img src="../../resources/img/avn1.Jpg">
                            </div>
                            <div class="card-content">
                              <p>Tenemos la mejor experiencia de todas, en exclusiva para usted.... Conosca nuestros Aviones y sus servicios</p>
                            </div>
                            
                          </div>
                                
                    </div>      

                    <div class="col s12 m6">
                      <h5 class="center" style="color:#3F51B5;"><b>¡Registro de Datos Personales!</b></h5>
                        <form id="registro">
                             <div class="input-field col s12">
                                <input placeholder="Ingrese su Nombre" id="nombre" type="text" name="nombre" data-error=".errornombre">
                                <label for="nombre">Nombre</label>
                                                <div class="errornombre red-text"></div>

                              </div>
                              <div class="input-field col s12">
                                <input placeholder="Ingrese su Apellido Paterno" id="ap" type="text" name="ap" data-error=".errorap">
                                <label for="ap">Apellido Paterno</label>
                                                <div class="errorap red-text"></div>

                              </div>
                              <div class="input-field col s12">
                                <input placeholder="Ingrese su Apellido Materno" id="am" type="text" name="am" data-error=".erroram">
                                <label for="am">Apellido Materno</label>
                                                                                <div class="erroram red-text"></div>

                              </div>
                              <div class="input-field col s12">
                                <input placeholder="Ingrese su Edad" id="edad" type="text" name="edad" data-error=".erroredad">
                                <label for="edad">Edad</label>
                                                                                <div class="erroredad red-text"></div>

                              </div>
                              <div class="input-field col s12">
                                <input placeholder="Ingrese su Telefono" id="telefono" type="text" name="telefono" data-error=".errortelefono">
                                <label for="telefono">Telefono</label>
                                                                                <div class="errortelefono red-text"></div>

                              </div>
                              <div class="input-field col s12">
                                <input placeholder="Ingrese su Correo" id="correo" type="text" name="correo" data-error=".errorcorreo">
                                <label for="correo">Correo</label>
                                                                                <div class="errorcorreo red-text"></div>

                              </div>
                              <div class="col s6 center">
                                  <a class="waves-effect waves-light btn" style="background:#A00000;">Cancelar</a>
                              </div>
                              <div class="col s6 center">
                                  <a class="waves-effect waves-light btn" style="background:#1663B3;" id="btn_registrar">Registrar</a>
                              </div>
                          
                        </form>
                    </div>

                      <div class="col s12 m3">
                
                                 
                          <div class="card">
                            <div class="card-image img-contenedor">
                              <img src="../../resources/img/cancun.png">
                            </div>
                            <div class="card-content">
                              <p>Tenemos la mejor experiencia de todas, en exclusiva para usted.... Visita Cancun con los mejores precios</p>
                            </div>
                          </div>
                           <div class="card">
                            <div class="card-image img-contenedor">
                              <img src="../../resources/img/cdmx.png">
                            </div>
                            <div class="card-content">
                              <p>Tenemos la mejor experiencia de todas, en exclusiva para usted.... Ciudad de Mexico</p>
                            </div>
                          </div>

                      </div>
                
                
              
              
            </div>
    <div style="display:none" id="cont_request"></div>
</main>

<script type="text/javascript">

    $(document).ready(function() 
              {

                  $("#btn_registrar").click(function(event){
                      $("#registro").submit();
                  });
                  
                  $("#registro").validate
                ({
                  rules:
                  {
                    nombre: "required",
                    ap:"required",
                    am:"required",
                    telefono:"required",
                    edad:"required",
                    correo:"required"
                  },
                  messages:
                  {
                    nombre: "Caracteres requeridos" ,
                    ap: "Caracteres requeridos",
                    am:"Caracteres requeridos",
                    telefono:"Caracteres requeridos",
                    edad:"Caracteres requeridos",
                    correo:"Caracteres requeridos"
                  },
                  errorElement:'div',
                  errorPlacement:function(error,element)
                  {
                      var placement=$(element).data("error");
                      if (placement)
                        $(placement).append(error);
                      else
                        {
                          Materialize.toast("Datos Incorrectos",6000);
                          error.insertAfter(element)
                        }
                      //error.insertAfter(element);
                      //Materialize.toast("Datos Incorrectos",6000);

                      
                  },
                  submitHandler:function(form)
                  {
                    
                  }
                });

    });

</script>


<?php
	include("../partials/footer.php")
?>