<?php 
	include("../templates/head.php");
 ?>
 <script type="text/javascript">
 	$(document).ready(function(event)
 	{
 		$(".btn_agregar_azafata").click(function(event)
 		{
 		$(".modal_agregar_azafata").openModal();	
 		})
 		$("#btn_aceptar_azafata").click(function(event)
 		{
 			$(".form_agregar_azafata").submit();
 		})
 		$(".form_agregar_azafata").validate(
 			{
 				ignore: [],
 				rules:
 				{
 					nom_azafata:
 					{
 						required: true,
 					},
 					ap_azafata:
 					{
 						required: true,
 					},
 					am_azafata:
 					{
 						required: true,
 					},
 					dia_azafata:
 					{
 						required: true,
 					},
 					mes_azafata:
 					{
 						required: true,
 					},
 					ano_azafata:
 					{
 						required: true,
 					},
 				},
 				messages:
 				{
 					nom_azafata:
 					{
 						required: "ingresa el nombre",
 					},
 					ap_azafata:
 					{
 						required: "ingresa el apellido paterno",
 					},
 					am_azafata:
 					{
 						required: "ingresa el apellido materno",
 					},
 					dia_azafata:
 					{
 						required: "ingresa el dia de nacimiento",
 					},
 					mes_azafata:
 					{
 						required: "ingresa el mes de nacimiento",
 					},
 					ano_azafata:
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
				 <div class="col l12" style="margin: 0; padding: 0;"><button class="btn col l12 white" style="min-height: 90px; color: black;" >ver azafatas</button>
				 </div>
				 <div class="col l12" style="margin: 0; padding: 0;"><button class="btn btn_agregar_azafata col l12 white" style="min-height: 90px; color: black;" >agregar azafatas</button>
				 </div>
				 <div class="col l12" style="margin: 0; padding: 0;"><button class="btn col l12 white" style="min-height: 90px; color: black;" >control de actividades</button>
				 </div>
			</div>
			<div class="modal modal_agregar_azafata">
				<div class="modal-content">
					<div class="row">
						<form class="form_agregar_azafata">
							<div class="row">
				              <div class="input-field col s12">
				                <input id="nom_azafata" type="text" name="nom_azafata" class="validate" data-error=".errornombre">
				                <label for="nom_azafata">ingresa nombre</label>
				                <div class="errornombre red-text"></div> 
				              </div>
				          </div>
				          <div class="row">
				              <div class="input-field col s12">
				                <input id="ap_azafata" type="text" name="ap_azafata" class="validate" data-error=".error_ap_azafata">
				                <label for="ap_azafata">ingresa apellido paterno</label>
				                <div class="error_ap_azafata red-text"></div> 
				              </div>
				          </div>
				          <div class="row">
				              <div class="input-field col s12">
				                <input id="am_azafata" type="text" name="am_azafata" class="validate" data-error=".error_am_azafata">
				                <label for="am_azafata">ingresa apellido materno</label>
				                <div class="error_am_azafata red-text"></div> 
				              </div>
				          </div>
				          <div class="row col s4">
				              <div class="input-field col s12">
				                <input id="dia_azafata" type="text" name="dia_azafata" class="validate" data-error=".error_dia_azafata">
				                <label for="dia_azafata">ingresa dia de nacimiento</label>
				                <div class="error_dia_azafata red-text"></div> 
				              </div>
				          </div>
				          <div class="row col s4">
				              <div class="input-field col s12">
				                <input id="mes_azafata" type="text" name="mes_azafata" class="validate" data-error=".error_mes_azafata">
				                <label for="mes_azafata">ingresa mes de nacimiento</label>
				                <div class="error_mes_azafata red-text"></div> 
				              </div>
				          </div>
				          <div class="row col s4">
				              <div class="input-field col s12">
				                <input id="ano_azafata" type="text" name="ano_azafata" class="validate" data-error=".error_ano_azafata">
				                <label for="ano_azafata">ingresa año de nacimiento</label>
				                <div class="error_ano_azafata red-text"></div> 
				              </div>
				          </div>
						</form>

						
					</div>
				</div>
				<div class="modal-footer">
			        <a href="#" class="btn-flat waves-effect waves light btn" id="btn_aceptar_azafata">Aceptar</a>
			        <a href="#" class="btn-flat waves-effect waves light btn modal-close">Cancelar</a>
			        
			      </div>
			</div>
		</div>
		

		</main>
	</body>
</html>
