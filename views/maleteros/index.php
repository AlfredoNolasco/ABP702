<?php 
	include("../templates/head.php");
 ?>
 <script type="text/javascript">
 	$(document).ready(function(event)
 	{
 		$(".btn_agregar_maletero").click(function(event)
 		{
 		$(".modal_agregar_maletero").openModal();	
 		})
 		$("#btn_aceptar_maletero").click(function(event)
 		{
 			$(".form_agregar_maletero").submit();
 		})
 		$(".form_agregar_maletero").validate(
 			{
 				ignore: [],
 				rules:
 				{
 					nom_maletero:
 					{
 						required: true,
 					},
 					ap_maletero:
 					{
 						required: true,
 					},
 					am_maletero:
 					{
 						required: true,
 					},
 					dia_maletero:
 					{
 						required: true,
 					},
 					mes_maletero:
 					{
 						required: true,
 					},
 					ano_maletero:
 					{
 						required: true,
 					},
 				},
 				messages:
 				{
 					nom_maletero:
 					{
 						required: "ingresa el nombre",
 					},
 					ap_maletero:
 					{
 						required: "ingresa el apellido paterno",
 					},
 					am_maletero:
 					{
 						required: "ingresa el apellido materno",
 					},
 					dia_maletero:
 					{
 						required: "ingresa el dia de nacimiento",
 					},
 					mes_maletero:
 					{
 						required: "ingresa el mes de nacimiento",
 					},
 					ano_maletero:
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
				 <div class="col l12" style="margin: 0; padding: 0;"><button class="btn col l12 white" style="min-height: 90px; color: black;" >ver maleteros</button>
				 </div>
				 <div class="col l12" style="margin: 0; padding: 0;"><button class="btn btn_agregar_maletero col l12 white" style="min-height: 90px; color: black;" >agregar maleteros</button>
				 </div>
				 <div class="col l12" style="margin: 0; padding: 0;"><button class="btn col l12 white" style="min-height: 90px; color: black;" >control de actividades</button>
				 </div>
			</div>
			<div class="modal modal_agregar_maletero">
				<div class="modal-content">
					<div class="row">
						<form class="form_agregar_maletero">
							<div class="row">
				              <div class="input-field col s12">
				                <input id="nom_maletero" type="text" name="nom_maletero" class="validate" data-error=".errornombre">
				                <label for="nom_maletero">ingresa nombre</label>
				                <div class="errornombre red-text"></div> 
				              </div>
				          </div>
				          <div class="row">
				              <div class="input-field col s12">
				                <input id="ap_maletero" type="text" name="ap_maletero" class="validate" data-error=".error_ap_maletero">
				                <label for="ap_maletero">ingresa apellido paterno</label>
				                <div class="error_ap_maletero red-text"></div> 
				              </div>
				          </div>
				          <div class="row">
				              <div class="input-field col s12">
				                <input id="am_maletero" type="text" name="am_maletero" class="validate" data-error=".error_am_maletero">
				                <label for="am_maletero">ingresa apellido materno</label>
				                <div class="error_am_maletero red-text"></div> 
				              </div>
				          </div>
				          <div class="row col s4">
				              <div class="input-field col s12">
				                <input id="dia_maletero" type="text" name="dia_maletero" class="validate" data-error=".error_dia_maletero">
				                <label for="dia_maletero">ingresa dia de nacimiento</label>
				                <div class="error_dia_maletero red-text"></div> 
				              </div>
				          </div>
				          <div class="row col s4">
				              <div class="input-field col s12">
				                <input id="mes_maletero" type="text" name="mes_maletero" class="validate" data-error=".error_mes_maletero">
				                <label for="mes_maletero">ingresa mes de nacimiento</label>
				                <div class="error_mes_maletero red-text"></div> 
				              </div>
				          </div>
				          <div class="row col s4">
				              <div class="input-field col s12">
				                <input id="ano_maletero" type="text" name="ano_maletero" class="validate" data-error=".error_ano_maletero">
				                <label for="ano_maletero">ingresa año de nacimiento</label>
				                <div class="error_ano_maletero red-text"></div> 
				              </div>
				          </div>
						</form>

						
					</div>
				</div>
				<div class="modal-footer">
			        <a href="#" class="btn-flat waves-effect waves light btn" id="btn_aceptar_maletero">Aceptar</a>
			        <a href="#" class="btn-flat waves-effect waves light btn modal-close">Cancelar</a>
			        
			      </div>
			</div>
		</div>
		

		</main>
	</body>
</html>