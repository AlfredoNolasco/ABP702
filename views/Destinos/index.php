<?php
  include("../partials/head.php");
?>
    <main>
          
    <div class="container row">
    <div class="col l12 m12 s12">
    <form id="formulario">
    <br>
    <h4 class="indigo-text">Realiza Viaje Ahora</h4>
    <br>
    <!-- Primer formulario -->
    <div class="row">
      <div class="col l12">
      <h5 class="indigo-text">Realiza Viaje</h5>
      <div class="input-field col l6 m6 s12">
              <input type="text" name="fechai" class="campofechai" size="12" class="validate" data-error=".error_fechai">
              <label>Fecha Ida</label>
              <div class="red-text error_fechai"></div>
          </div>
          <div class="input-field col l6 m6 s12">
              <input type="text" name="fechav" class="campofechav" size="12" class="validate" data-error=".error_fechav">
              <label>Fecha Vuelta</label>
               <div class="red-text error_fechav"></div>
          </div>
        
          <div class="input-field col l6 m6 s12">
            <select id="origen" name="origen" class="validate" data-error=".error_origen">
              <option value="" disabled selected>Elige una opción</option>
              <option value="1">CDMX</option>
              <option value="2">Acapulco</option>
              <option value="3">Mazatlan</option>
              <option value="4">Oaxaca</option>
              <option value="5">Veracruz</option>
              <option value="6">Nayarit</option>
              <option value="7">Cancun</option>
              <option value="8">Monterrey</option>
              <option value="9">Sianloa</option>
              <option value="10">Tijuana</option>
              <option value="11">Chihuahua</option>
              <option value="12">Gerrero</option>
              <option value="13">Zacatecas</option>
              <option value="13">Durango</option>
              <option value="14">Toluca</option>
              <option value="15">Baja California</option>
              <option value="16">Queretaro</option>
              <option value="17">Quintanaroo</option>
            </select>
            <label>Origen</label>
            <div class="red-text error_origen"></div>
          </div>
          <div class="input-field col l6 m6 s12">
            <select id="destino" name="destino" class="validate" data-error=".error_destino">
              <option value="" disabled selected>Elige una opción</option>
              <option value="1">CDMX</option>
              <option value="2">Acapulco</option>
              <option value="3">Mazatlan</option>
              <option value="4">Oaxaca</option>
              <option value="5">Veracruz</option>
              <option value="6">Nayarit</option>
              <option value="7">Cancun</option>
              <option value="8">Monterrey</option>
              <option value="9">Sianloa</option>
              <option value="10">Tijuana</option>
              <option value="11">Chihuahua</option>
              <option value="12">Gerrero</option>
              <option value="13">Zacatecas</option>
              <option value="13">Durango</option>
              <option value="14">Toluca</option>
              <option value="15">Baja California</option>
              <option value="16">Queretaro</option>
              <option value="17">Quintanaroo</option>
            </select>
            <label>Destino</label>
            <div class="red-text error_destino"></div>
          </div>

          
            <div class="input-field col l4 m6 s12">
            <select id="tiempo" name="tiempo" class="validate" data-error=".error_tiempo">
              <option value="" disabled selected>Elige una opción</option>
              <option value="1">00:30 min</option>
              <option value="2">01:00 hrs</option>
              <option value="3">01:30 hrs</option>
              <option value="2">02:00 hrs</option>
              <option value="3">02:30 hrs</option>
            </select>
            <label>Duracion de Vuelo</label>
              <div class="red-text error_tiempo"></div>
          </div>
            <div class="input-field col l4 m6 s12">
            <select id="tipo_vuelo" name="tipo_vuelo" class="validate" data-error=".error_tipo_vuelo">
              <option value="" disabled selected>Elige una opción</option>
              <option value="1">Ejecutivo</option>
              <option value="2">Turista</option>
            </select>
            <label>Tipo de Vuelo</label>
            <div class="red-text error_tipo_vuelo"></div>
          </div>
          <div class="input-field col l4 m6 s12">
            <select id="avion" name="avion" class="validate" data-error=".error_avion">
              <option value="" disabled selected>Elige una opción</option>
              <option value="1">Void</option>
              <option value="2">Jet</option>
              <option value="3">Comercial</option>
              
            </select>
            <label>Avion</label>
              <div class="red-text error_avion"></div>
          </div>
          
      </div>
    </div>
    
    
        <a class="waves-effect waves-light hover_verde btn right" id="btn_realizar">Aceptar</a>

    </div>
    <br><br>
    </form>
    </div>


</main>
<script type="text/javascript">
  $(document).ready(function() {
    $(".button-collapse").sideNav();
      $(".campofechai").calendarioDW();
      $(".campofechav").calendarioDW();
      $('select').material_select();
        $("#btn_realizar").click(function(event){
          $("#formulario").submit();
        });
      $("#formulario").validate({
        ignore:[],
        rules:{
          origen:"required",
          destino:"required",
          fechai:"required",
          fechav:"required",
          tipo_vuelo:"required",
          tiempo:"required",
          avion: "required"
        },
        messages:{
          origen:"Elige Origen",
          destino:"Elige Destino",
          fechai:"Elige fecha Ida",
          fechav:"Elige fecha Vuelta",
          tipo_vuelo:"Elige Tipo De Vuelo",
          tiempo:"Elige Duracion Del Vuelo",
          avion: "Elige Avion"
          
        },
        errorElement:"div",
        errorPlacement:function(error,element){
          var placement=$(element).data("error");
          if(placement)
            $(placement).append(error);
          else
            error.insertAfter(error);
        },
        submitHandler:function(form)
        {
          alert("Viaje Realizado");
        }
      });
  });
</script>


<?php
  include("../partials/footer.php")
?>
        
    
