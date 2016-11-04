<?php 
	include("../templates/head.php");
 ?>
 <script type="text/javascript">
 	$(document).ready(function(event)
 	{
 		$(".btn_agregar_limpieza").click(function(event)
 		{
 		$(".modal_agregar_limpieza").openModal();	
 		})
 		$("#btn_aceptar_limpieza").click(function(event)
 		{
 			$(".form_agregar_limpieza").submit();
 		})
 		$(".form_agregar_limpieza").validate(
 			{
 				ignore: [],
 				rules:
 				{
 					nom_limpieza:
 					{
 						required: true,
 					},
 					ap_limpieza:
 					{
 						required: true,
 					},
 					am_limpieza:
 					{
 						required: true,
 					},
 					dia_limpieza:
 					{
 						required: true,
 					},
 					mes_limpieza:
 					{
 						required: true,
 					},
 					ano_limpieza:
 					{
 						required: true,
 					},
 				},
 				messages:
 				{
 					nom_limpieza:
 					{
 						required: "ingresa el nombre",
 					},
 					ap_limpieza:
 					{
 						required: "ingresa el apellido paterno",
 					},
 					am_limpieza:
 					{
 						required: "ingresa el apellido materno",
 					},
 					dia_limpieza:
 					{
 						required: "ingresa el dia de nacimiento",
 					},
 					mes_limpieza:
 					{
 						required: "ingresa el mes de nacimiento",
 					},
 					ano_limpieza:
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
				 <div class="col l12" style="margin: 0; padding: 0;"><button class="btn col l12 white" style="min-height: 90px; color: black;" >ver personal limpieza</button>
				 </div>
				 <div class="col l12" style="margin: 0; padding: 0;"><button class="btn btn_agregar_limpieza col l12 white" style="min-height: 90px; color: black;" >agregar personal limpieza</button>
				 </div>
				 <div class="col l12" style="margin: 0; padding: 0;"><button class="btn col l12 white" style="min-height: 90px; color: black;" >control de actividades</button>
				 </div>
			</div>
			<div class="modal modal_agregar_limpieza">
				<div class="modal-content">
					<div class="row">
						<form class="form_agregar_limpieza">
							<div class="row">
				              <div class="input-field col s12">
				                <input id="nom_limpieza" type="text" name="nom_limpieza" class="validate" data-error=".errornombre">
				                <label for="nom_limpieza">ingresa nombre</label>
				                <div class="errornombre red-text"></div> 
				              </div>
				          </div>
				          <div class="row">
				              <div class="input-field col s12">
				                <input id="ap_limpieza" type="text" name="ap_limpieza" class="validate" data-error=".error_ap_limpieza">
				                <label for="ap_limpieza">ingresa apellido paterno</label>
				                <div class="error_ap_limpieza red-text"></div> 
				              </div>
				          </div>
				          <div class="row">
				              <div class="input-field col s12">
				                <input id="am_limpieza" type="text" name="am_limpieza" class="validate" data-error=".error_am_limpieza">
				                <label for="am_limpieza">ingresa apellido materno</label>
				                <div class="error_am_limpieza red-text"></div> 
				              </div>
				          </div>
				          <div class="row col s4">
				              <div class="input-field col s12">
				                <input id="dia_limpieza" type="text" name="dia_limpieza" class="validate" data-error=".error_dia_limpieza">
				                <label for="dia_limpieza">ingresa dia de nacimiento</label>
				                <div class="error_dia_limpieza red-text"></div> 
				              </div>
				          </div>
				          <div class="row col s4">
				              <div class="input-field col s12">
				                <input id="mes_limpieza" type="text" name="mes_limpieza" class="validate" data-error=".error_mes_limpieza">
				                <label for="mes_limpieza">ingresa mes de nacimiento</label>
				                <div class="error_mes_limpieza red-text"></div> 
				              </div>
				          </div>
				          <div class="row col s4">
				              <div class="input-field col s12">
				                <input id="ano_limpieza" type="text" name="ano_limpieza" class="validate" data-error=".error_ano_limpieza">
				                <label for="ano_limpieza">ingresa año de nacimiento</label>
				                <div class="error_ano_limpieza red-text"></div> 
				              </div>
				          </div>
						</form>

						
					</div>
				</div>
				<div class="modal-footer">
			        <a href="#" class="btn-flat waves-effect waves light btn" id="btn_aceptar_limpieza">Aceptar</a>
			        <a href="#" class="btn-flat waves-effect waves light btn modal-close">Cancelar</a>
			        
			      </div>
			</div>
		</div>
		

		</main>
	</body>
</html>