<?php 
	include("../templates/head.php");
 ?>
 <script type="text/javascript">
 	$(document).ready(function(event)
 	{
 		$(".btn_agregar_mecanico").click(function(event)
 		{
 		$(".modal_agregar_mecanico").openModal();	
 		})
 		$("#btn_aceptar_mecanico").click(function(event)
 		{
 			$(".form_agregar_mecanico").submit();
 		})
 		$(".form_agregar_mecanico").validate(
 			{
 				ignore: [],
 				rules:
 				{
 					nom_mecanico:
 					{
 						required: true,
 					},
 					ap_mecanico:
 					{
 						required: true,
 					},
 					am_mecanico:
 					{
 						required: true,
 					},
 					dia_mecanico:
 					{
 						required: true,
 					},
 					mes_mecanico:
 					{
 						required: true,
 					},
 					ano_mecanico:
 					{
 						required: true,
 					},
 				},
 				messages:
 				{
 					nom_mecanico:
 					{
 						required: "ingresa el nombre",
 					},
 					ap_mecanico:
 					{
 						required: "ingresa el apellido paterno",
 					},
 					am_mecanico:
 					{
 						required: "ingresa el apellido materno",
 					},
 					dia_mecanico:
 					{
 						required: "ingresa el dia de nacimiento",
 					},
 					mes_mecanico:
 					{
 						required: "ingresa el mes de nacimiento",
 					},
 					ano_mecanico:
 					{
 						required: "ingresa el año de nacimiento",
 					},
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

 			});
 		
 	});
 </script>
 <div class="row">
		 	<div class="col l3 black" style="padding: 0;">
				 <div class="col l12" style="margin: 0; padding: 0;"><button class="btn col l12 white" style="min-height: 90px; color: black;" >ver mecanicos</button>
				 </div>
				 <div class="col l12" style="margin: 0; padding: 0;"><button class="btn btn_agregar_mecanico col l12 white" style="min-height: 90px; color: black;" >agregar mecanicos</button>
				 </div>
				 <div class="col l12" style="margin: 0; padding: 0;"><button class="btn col l12 white" style="min-height: 90px; color: black;" >control de actividades</button>
				 </div>
			</div>
			<div class="modal modal_agregar_mecanico">
				<div class="modal-content">
					<div class="row">
						<form class="form_agregar_mecanico">
							<div class="row">
				              <div class="input-field col s12">
				                <input id="nom_mecanico" type="text" name="nom_mecanico" class="validate" data-error=".errornombre">
				                <label for="nom_mecanico">ingresa nombre</label>
				                <div class="errornombre red-text"></div> 
				              </div>
				          </div>
				          <div class="row">
				              <div class="input-field col s12">
				                <input id="ap_mecanico" type="text" name="ap_mecanico" class="validate" data-error=".error_ap_mecanico">
				                <label for="ap_mecanico">ingresa apellido paterno</label>
				                <div class="error_ap_mecanico red-text"></div> 
				              </div>
				          </div>
				          <div class="row">
				              <div class="input-field col s12">
				                <input id="am_mecanico" type="text" name="am_mecanico" class="validate" data-error=".error_am_mecanico">
				                <label for="am_mecanico">ingresa apellido materno</label>
				                <div class="error_am_mecanico red-text"></div> 
				              </div>
				          </div>
				          <div class="row col s4">
				              <div class="input-field col s12">
				                <input id="dia_mecanico" type="text" name="dia_mecanico" class="validate" data-error=".error_dia_mecanico">
				                <label for="dia_mecanico">ingresa dia de nacimiento</label>
				                <div class="error_dia_mecanico red-text"></div> 
				              </div>
				          </div>
				          <div class="row col s4">
				              <div class="input-field col s12">
				                <input id="mes_mecanico" type="text" name="mes_mecanico" class="validate" data-error=".error_mes_mecanico">
				                <label for="mes_mecanico">ingresa mes de nacimiento</label>
				                <div class="error_mes_mecanico red-text"></div> 
				              </div>
				          </div>
				          <div class="row col s4">
				              <div class="input-field col s12">
				                <input id="ano_mecanico" type="text" name="ano_mecanico" class="validate" data-error=".error_ano_mecanico">
				                <label for="ano_mecanico">ingresa año de nacimiento</label>
				                <div class="error_ano_mecanico red-text"></div> 
				              </div>
				          </div>
						</form>

						
					</div>
				</div>
				<div class="modal-footer">
			        <a href="#" class="btn-flat waves-effect waves light btn" id="btn_aceptar_mecanico">Aceptar</a>
			        <a href="#" class="btn-flat waves-effect waves light btn modal-close">Cancelar</a>
			        
			      </div>
			</div>
		</div>
		

		</main>
	</body>
</html>