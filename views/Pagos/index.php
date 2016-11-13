<?php
  include("../partials/head.php")
?>
<main>
<div class="row">
<div class="col l8">
<form id="formulario">
<br>
<h4 class="indigo-text">Ultimo paso: ¡Asegure su lugar ahora!</h4>
<br>
<!-- Forma de pago -->
<div class="row" id="forma_pago">
  <div class="col l6">
  	
  	<h5 class="indigo-text">Forma de pago:</h5>
    <p>
      <input name="group1" type="radio" id="test1" class="validate" data-error=".error_radio"/>
      <label for="test1">Tarjeta</label>
	  <div class="red-text error_radio"></div>

    </p>
    <p>
      <input name="group1" type="radio" id="test2" class="validate" data-error=".error_radio"/>
      <label for="test2">Efectivo</label>
	  <div class="red-text error_radio"></div>
    </p>
  	 
  </div>  
</div>
<br>
<!-- Primer formulario -->
<div class="row">
	<div class="col l11">
		<h5 class="indigo-text">Datos de la tarjeta</h5>
	  	<div class="input-field">
		    <select id="elegir_tarjeta" name="elegir_tarjeta" class="validate" data-error=".error_elegir_tarjeta">
		      <option value="" disabled selected>Elige una opción</option>
		      <option value="1">Visa</option>
		      <option value="2">American Express</option>
		      <option value="3">MasterCard</option>
		    </select>
		    <label>Tarjeta</label>
		    <div class="red-text error_elegir_tarjeta"></div>
	  	</div>
		<div class="input-field col l6">
	        <input name="numero_tarjeta" id="numero_tarjeta" type="text" length="16" data-error=".error_numero_tarjeta" class="validate">
	        <label for="numero_tarjeta">Número de tarjeta</label>
		    <div class="red-text error_numero_tarjeta"></div>
        </div>
        <div class="input-field col l3">
		    <select id="mes_vencimiento" name="mes_vencimiento" class="validate" data-error=".error_mes_vencimiento">
		      <option value="" disabled selected>Elige una opción</option>
		      <option value="1">Enero</option>
		      <option value="2">Febrero</option>
		      <option value="3">Marzo</option>
		      <option value="4">Abril</option>
		      <option value="5">Mayo</option>
		      <option value="6">Junio</option>
		      <option value="7">Julio</option>
		      <option value="8">Agosto</option>
		      <option value="9">Septiembre</option>
		      <option value="10">Octubre</option>
		      <option value="11">Noviembre</option>
		      <option value="12">Diciembre</option>
			  </select>
			  <label>Mes vencimiento</label>
		    <div class="red-text error_mes_vencimiento"></div>
	  	</div>
	  	<div class="input-field col l3">
		    <select id="año_vencimiento" name="año_vencimiento" class="validate" data-error=".error_año_vencimiento">
		      <option value="" disabled selected>Elige una opción</option>
		      <option value="1">2026</option>
		      <option value="2">2025</option>
		      <option value="3">2024</option>
		      <option value="4">2023</option>
		      <option value="5">2022</option>
		      <option value="6">2021</option>
		      <option value="6">2020</option>
		      <option value="7">2019</option>
		      <option value="8">2018</option>
		      <option value="9">2017</option>
		      <option value="10">2016</option>
			  </select>
			  <label>Año vencimiento</label>
		      <div class="red-text error_año_vencimiento"></div>
	  	</div>
	  	<div class="input-field col l12" >
				<input type="text" class="validate" data-error=".error_titular" name="titular" id="titular">
				<label for="titular">Titular de la tarjeta</label>
		    	<div class="red-text error_titular"></div>
		</div>
	</div>
</div>
<br>
<!-- tercer formulario -->
<div class="row">
	<div class="col l12">
		<h5 class="indigo-text">Información de contacto </h5>
		<div class="input-field col l12">
          <input id="email" name="email" type="email" class="validate" data-error=".error_email">
          <label for="email">Email (donde recibirá su ticket electronico)</label>
		  <div class="red-text error_email"></div>
        </div>
        <div class="input-field col l4">
		    <select id="telefono" name="telefono" class="validate" data-error=".error_telefono">
		      <option value="" disabled selected>Teléfono</option>
		      <option value="1">Celular</option>
		      <option value="2">Casa</option>
		      <option value="3">Trabajo</option>
		      <option value="4">Fax</option>
		      <option value="5">Otro</option>
		    </select>
		    <label>Eliga una opcion</label>
		    <div class="red-text error_telefono"></div>
		</div>
		<div class="input-field col l4">
			<input id="lada" name="lada" type="text" class="validate" data-error=".error_lada">
          	<label for="lada">Lada</label>
		    <div class="red-text error_lada"></div>
		</div>
		<div class="input-field col l4">
			<input name="numero" id="numero" type="text" class="validate" data-error=".error_numero">
          	<label for="numero">Número</label>
		    <div class="red-text error_numero"></div>
		</div>
	</div>
</div>
<br>

<!-- Boton comprar -->
<div class="row">
	<div class="col l6">
		<a class="waves-effect waves-light hover_verde btn left" id="btn_comprar">Comprar </a>
	</div>
</div>
<br><br>
</form>
</div>

<!-- Trabajar con cards -->
<br><br>
<div class="col l3 offset-l0 center">
	<div class="card">
        <div class="card-image">
          <img src="../../resources/img/monterrey.png">
          <span class="card-title">Monterrey</span>
        </div>
        <div class="card-content">
            <p>Vuelo Ejecutivo</p>
            <label for="">$1,606.00</label>
        </div>
    </div>
    <br>
    <div class="card lime lighten-4 justify">
        <div class="card-content black-text">
              <span class="card-title indigo-text"><h5>Información de vuelo</h5></span>
              <p style="justify">I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively. Lorem ipsum dolor 
              sit amet, consectetur adipisicing elit. Sapiente ducimus magnam eos blanditiis ex. 
              Totam et enim, saepe doloremque quos distinctio.</p>
        </div>
    </div>
    <br>
    <div class="card">
        <div class="card-image">
          <img src="../../resources/img/cancun.png">
          <span class="card-title">Cancún</span>
        </div>
        <div class="card-content">
            <p>Vuelo Ejecutivo</p>
            <label for="">$1,200.00</label>
        </div>
    </div>
</div>
</div>
</main>
<script type="text/javascript">
	$(document).ready(function() {
	    $('select').material_select();

	    $("#btn_comprar").click(function(event){
	    	$("#formulario").submit();
	    });

	    $("#formulario").validate({
	    	ignore:[],
	    	rules:{
	    		elegir_tarjeta:"required",
	    		numero_tarjeta:"required",
	    		mes_vencimiento:"required",
	    		año_vencimiento:"required",
	    		titular: "required",
	    		email:"required",
	    		telefono:"required",
	    		lada:"required",
	    		numero:"required",
	    		group1:"required"
	    	},
	    	messages:{
	    		elegir_tarjeta:"Elige tipo de tarjeta",
	    		numero_tarjeta:"Ingresa número de tarjeta",
	    		mes_vencimiento:"Ingresa mes de vencimiento",
	    		año_vencimiento:"Ingresa año de vencimiento",
	    		titular: "Ingresa titular de la tarjeta",
	    		email:"Ingresa email",
	    		telefono:"Ingresa tipo de telefono",
	    		lada:"Ingresa lada",
	    		numero:"Ingresa numero",
	    		group1:"Selecciona una opción"
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
	    		alert("todo ok");
	    	}
	    });
	});
</script>

<?php
  include("../partials/footer.php")
?>


 