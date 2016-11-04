<?php
  include("../partials/head.php")
?>
	<main>
		 <div class="slider">
    <ul class="slides">
      <li>
        <img src="http://lorempixel.com/580/250/nature/1"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>

      <li>
        <img src="http://lorempixel.com/580/250/nature/2"> <!-- random image -->
        <div class="caption left-align">
          <h3>Left Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>

      <li>
        <img src="http://lorempixel.com/580/250/nature/3"> <!-- random image -->
        <div class="caption right-align">
          <h3>Right Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>

      <li>
        <img src="http://lorempixel.com/580/250/nature/4"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>

    </ul>
  </div>

		

    <div  class="row">
      <div class="col l4 s6 m6">
        <div class="card light-blue lighten-5">
          <div class="card-content black-text">
            <span class="card-title"><b>¿A donde te llevamos?</b></span>
              <form id="menu">
                <div class="row">
                  <div class="input-field col l11 m12 s12">
                    <input id="origen" type="text" name="origen" class="origen" id="origen" data-error=".erroram">
                    <label for="origen">Origen</label>
                    <div class="erroram red-text"></div>
                  </div>

                  <div class="input-field col l11 m12 s12">
                    <input id="destino" type="text" name="destino" class="destino" id="destino" data-error=".erroram">
                    <label for="destino">Destino</label>
                    <div class="erroram red-text"></div>
                  </div>

                  <div class="input-field col l11 m12 s12">
                    <select >
                      <option value="" disabled selected>Selecciona una opcion...</option>
                      <option value="1">Vuelo redondo</option>
                      <option value="2">solo ida</option>
                    </select>
                    <label>Viaje</label>
                  </div>
                  
                  <div class="input-field col l3 m12 s12">
                    <select >
                      <option value="" disabled selected>Cantidad</option>
                      <option value="1">0</option>
                      <option value="2">1</option>
                      <option value="3">2</option>
                      <option value="4">3</option>
                      <option value="5">4</option>
                      <option value="6">5</option>
                      <option value="7">6</option>
                    </select>
                    <label>Adultos</label>
                  </div>
                  
                  <div class="input-field col l3 m12 s12">
                    <select >
                      <option value="" disabled selected>Cantidad</option>
                      <option value="1">0</option>
                      <option value="2">1</option>
                      <option value="3">2</option>
                      <option value="4">3</option>
                      <option value="5">4</option>
                      <option value="6">5</option>
                      <option value="7">6</option>
                    </select>
                    <label>Niños</label>
                  </div>
                  
                  <div class="input-field col l3 m12 s12 offset-l1">
                    <a class="waves-effect blue lighten-3 btn" id="btn_buscar">Buscar</a>
                  </div>  
                  
                  <div class="input-field col l11 m12 s12">
                    <select >
                      <option value="" disabled selected>Clase...</option>
                      <option value="1">Turista</option>
                      <option value="2">Negocios</option>
                    </select>
                    <label>Clase</label>
                  </div>

                </div>  
              </form>
        </div>
      </div>
    </div>
	</main>
	<script type="text/javascript">
      $(document).ready(function()
      {

        $(".button-collapse").sideNav();
        $('select').material_select();
        $('.slider').slider({height:450 ,transition:1500, interval:2000, full_width: true});
       /* $("#btn_buscar").click(function(event){
                      $("#menu").submit();
                  });
        $("#menu").validate;
        ({
          rules:
          {
            origen: "required",
            destino: "required"

          },
           messages:
                  {
                    origen: "Caracteres requeridos" ,
                    destino: "Caracteres requeridos"
                   
                  },


        })
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
                });*/
      });

    </script>
<?php
  include("../partials/footer.php")
?>