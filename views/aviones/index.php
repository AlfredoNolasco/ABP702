<?php
	include("../partials/head.php");
?>

<script type="text/javascript">
///////validacion de formaulario Datos
  $(document).ready(function()
  {
        $("#btn_agregar").click(function()
        {
            $("#modal_agregar").openModal();
        });

    $("#acepta_registro").click(function(event)
    {
      $("#form_aviones").submit();
    });

    $('select').material_select();
    $("#form_aviones").validate({
        ignore:[],   
        rules:{
          nombre:"required",
          descripcion:"required",
          asiento:
          {
            required:true,
            number:true
          },
          combustible:
          {
            required:true,
            number:true
          },
          tipo:"required"
        },
        messages:{
          nombre:"ingresa un nombre",
          asiento:
          {
            required:"Ingres numero de Asientos",
            number:"Solamente numeros"
          },
          descripcion:"ingresa una breve deescripcion",
          combustible:
          {
            required:"ingresa cantidad de combustible",
            number:"Solamente Numeros"
          },
          tipo:"ingresa el tipo de vuelo"
            
        },
        errorElement:'div',
        errorPlacement:function(error,element)
        {
            var placement=$(element).data("error");
            if(placement)
              $(placement).append(error);
            else
              error.insertAfter(element);
        },
        submitHandler:function(form)
        {
            alert("todo ok");
          $("#modal_agregar").closeModal();
        }
         
    
  });
});
</script>

<body>
	<main>
    
     <div class="row">
        <div class="center">
            <h3 class="center">Aviones</h3>
            <a class="btn-floating btn-large waves-effect waves-light blue" id="btn_agregar"><i class="material-icons">add</i></a>
        </div>
    </div>
    <div class="row white">
  <div class="slider col l8 s12 offset-l2">
      <ul class="slides">
        <li>
          <img src="../../resources/img/1.jpg"> <!-- random image -->
          <div class="caption center-align black-text">
            <h3>AEROLINE 702</h3>
            <h5 class="light black-text text-lighten-3">MEJOR SERVICIO PARA NUESTROS AVIONES</h5>
          </div>
        </li>
        <li>
          <img src="../../resources/img/2.jpg"> <!-- random image -->
          <div class="caption center-align black-text">
            <h3>AEROLINE 702</h3>
            <h5 class="light black-text text-lighten-3">AVIONES EN ALMACEN/ SEGUROS PARA EL VIAJE</h5>
          </div>
        </li>
        <li>
          <img src="../../resources/img/3.jpg"> <!-- random image -->
          <div class="caption center-align black-text">
            <h3>AEROLINE 702</h3>
            <h5 class="light black-text text-lighten-3">HISTORIAL DE CADA AVION</h5>
          </div>
        </li>
        
      </ul>
    </div>
 </div>

    <div class="modal" id="modal_agregar">
        <div class="modal-content">
            <div class="container row">
                <h5 align="center">Aviones</h5>
                <br>
                <form id="form_aviones" name="form_aviones">
                
                    <div class="input-field">
                        <i class="material-icons prefix">airplanemode_active</i>
                        <input id="nombre" type="text" name="nombre" class="validate" data-error=".errornombre">
                        <label for="nombre">Nombre Del Avion</label><br>
                        <div class="errornombre red-text"></div>
              
                    </div>
                    <div class="input-field">
                        <i class="material-icons prefix">airline_seat_recline_extra</i>
                        <input id="asiento" type="text" name="asiento" class="validate" data-error=".errorasiento">
                        <label for="asiento">Numero de Asientos</label><br>
                        <div class="errorasiento red-text"></div>
              
                    </div>
                    <div class="input-field">
                        <i class="material-icons prefix">assignment</i>
                        <textarea id="descripcion"  name="descripcion" class="validate" data-error=".errordescripcion" class="materialize-textarea" rows="10" placeholder="Breve Descripcion Del Avion"></textarea>
                        <label for="descripcion"><b>Descripcion Del Avion</b></label>
                        <div class="errordescripcion red-text"></div>
              
                    </div>
                    <div class="input-field">
                        <i class="material-icons prefix">local_gas_station</i>
                        <input id="combustible" type="text" name="combustible" class="validate" data-error=".errorcombustible">
                        <label for="combustible">Capacidad de Combustible</label><br>
                        <div class="errorcombustible red-text"></div>
              
                    </div>
                    <div class="input-field">
                        <i class="material-icons prefix">equalizer</i>
                        <select name="tipo" id="tipo" class="validate" data-error=".errortipo">
                                <option value="" disabled selected>Tipo de vuelo</option>
                                <option value="1">Clase Alta</option>
                                <option value="2">Clase Baja</option>
                                
                        </select>
                                <div class="errortipo red-text"></div>
                    </div>
                
            </form>
            </div>
        
        <div class="modal-footer">
                <a href="#" class="btn-flat waves-effects wavs-light btn" id="acepta_registro">Aceptar</a>
                <a href="#" class="btn-flat waves-effects wavs-light btn   modal-close">Cancelar</a>
            </div>
        </div>    
    </div>     

    </main>
</body>
<?php 
	include("../partials/footer.php");
 ?>