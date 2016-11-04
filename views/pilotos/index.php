<?php 
	include("../templates/head.php");
 ?>
 <script type="text/javascript">
 	$(document).ready(function(event)
 	{
 		$(".btn_agregar_piloto").click(function(event)
 		{
 		$(".modal_agregar_piloto").openModal();	
 		})
 		$("#btn_aceptar_piloto").click(function(event)
 		{
 			$(".form_agregar_piloto").submit();
 		})
 		$(".form_agregar_piloto").validate(
 			{
 				ignore: [],
 				rules:
 				{
 					nom_piloto:
 					{
 						required: true,
 					},
 					ap_piloto:
 					{
 						required: true,
 					},
 					am_piloto:
 					{
 						required: true,
 					},
 					dia_piloto:
 					{
 						required: true,
 					},
 					mes_piloto:
 					{
 						required: true,
 					},
 					ano_piloto:
 					{
 						required: true,
 					},
 				},
 				messages:
 				{
 					nom_piloto:
 					{
 						required: "ingresa el nombre",
 					},
 					ap_piloto:
 					{
 						required: "ingresa el apellido paterno",
 					},
 					am_piloto:
 					{
 						required: "ingresa el apellido materno",
 					},
 					dia_piloto:
 					{
 						required: "ingresa el dia de nacimiento",
 					},
 					mes_piloto:
 					{
 						required: "ingresa el mes de nacimiento",
 					},
 					ano_piloto:
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
				 <div class="col l12" style="margin: 0; padding: 0;"><button class="btn col l12 white" style="min-height: 90px; color: black;" >ver pilotos</button>
				 </div>
				 <div class="col l12" style="margin: 0; padding: 0;"><button class="btn btn_agregar_piloto col l12 white" style="min-height: 90px; color: black;" >agregar pilotos</button>
				 </div>
				 <div class="col l12" style="margin: 0; padding: 0;"><button class="btn col l12 white" style="min-height: 90px; color: black;" >control de actividades</button>
				 </div>
			</div>
			<div class="modal modal_agregar_piloto">
				<div class="modal-content">
					<div class="row">
						<form class="form_agregar_piloto">
							<div class="row">
				              <div class="input-field col s12">
				                <input id="nom_piloto" type="text" name="nom_piloto" class="validate" data-error=".errornombre">
				                <label for="nom_piloto">ingresa nombre</label>
				                <div class="errornombre red-text"></div> 
				              </div>
				          </div>
				          <div class="row">
				              <div class="input-field col s12">
				                <input id="ap_piloto" type="text" name="ap_piloto" class="validate" data-error=".error_ap_piloto">
				                <label for="ap_piloto">ingresa apellido paterno</label>
				                <div class="error_ap_piloto red-text"></div> 
				              </div>
				          </div>
				          <div class="row">
				              <div class="input-field col s12">
				                <input id="am_piloto" type="text" name="am_piloto" class="validate" data-error=".error_am_piloto">
				                <label for="am_piloto">ingresa apellido materno</label>
				                <div class="error_am_piloto red-text"></div> 
				              </div>
				          </div>
				          <div class="row col s4">
				              <div class="input-field col s12">
				                <input id="dia_piloto" type="text" name="dia_piloto" class="validate" data-error=".error_dia_piloto">
				                <label for="dia_piloto">ingresa dia de nacimiento</label>
				                <div class="error_dia_piloto red-text"></div> 
				              </div>
				          </div>
				          <div class="row col s4">
				              <div class="input-field col s12">
				                <input id="mes_piloto" type="text" name="mes_piloto" class="validate" data-error=".error_mes_piloto">
				                <label for="mes_piloto">ingresa mes de nacimiento</label>
				                <div class="error_mes_piloto red-text"></div> 
				              </div>
				          </div>
				          <div class="row col s4">
				              <div class="input-field col s12">
				                <input id="ano_piloto" type="text" name="ano_piloto" class="validate" data-error=".error_ano_piloto">
				                <label for="ano_piloto">ingresa año de nacimiento</label>
				                <div class="error_ano_piloto red-text"></div> 
				              </div>
				          </div>
						</form>

						
					</div>
				</div>
				<div class="modal-footer">
			        <a href="#" class="btn-flat waves-effect waves light btn" id="btn_aceptar_piloto">Aceptar</a>
			        <a href="#" class="btn-flat waves-effect waves light btn modal-close">Cancelar</a>
			        
			      </div>
			</div>
		</div>
		

		</main>
	</body>
</html>