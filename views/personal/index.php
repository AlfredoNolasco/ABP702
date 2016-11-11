<?php 
	include("../partials/head.php");
 ?>
 <script type="text/javascript">
 	$(document).ready(function(event)
 	{
 		$("#btn_agregar_azafata").click(function(event)
 		{
 			document.getElementById('div_azafatas').style.display='block';
 			document.getElementById('menu_independiente_azafatas').style.display='none';
 		});
 		$("#btn_cerrar_form").click(function(event)
 		{
 			document.getElementById('div_azafatas').style.display='none';
 			document.getElementById('menu_independiente_azafatas').style.display='none';
 		});
 		$("#id_azafatas").click(function(event)
 		{
 			document.getElementById('menu_independiente_seguridad').style.display='none';
 			document.getElementById('div_seguridad').style.display='none';
 			document.getElementById('menu_independiente_mecanicos').style.display='none';
 			document.getElementById('div_mecanicos').style.display='none';
 			document.getElementById('menu_independiente_limpieza').style.display='none';
 			document.getElementById('div_limpieza').style.display='none';
 			document.getElementById('menu_independiente_pilotos').style.display='none';
 			document.getElementById('div_pilotos').style.display='none';
 			document.getElementById('menu_independiente_maleteros').style.display='none';
 			document.getElementById('div_maleteros').style.display='none';
 			document.getElementById('menu_independiente_azafatas').style.display='block';

 		});

 		$("#btn_agregar_mecanico").click(function(event)
 		{
 			document.getElementById('div_mecanicos').style.display='block';
 			document.getElementById('menu_independiente_mecanicos').style.display='none';
 		});
 		$("#btn_cerrar_form_mecanicos").click(function(event)
 		{
 			document.getElementById('div_mecanicos').style.display='none';
 			document.getElementById('menu_independiente_mecanicos').style.display='none';
 		});
 		$("#id_mecanicos").click(function(event)
 		{
 			document.getElementById('menu_independiente_azafatas').style.display='none';
 			document.getElementById('div_azafatas').style.display='none';
 			document.getElementById('menu_independiente_seguridad').style.display='none';
 			document.getElementById('div_seguridad').style.display='none';
 			document.getElementById('menu_independiente_limpieza').style.display='none';
 			document.getElementById('div_limpieza').style.display='none';
 			document.getElementById('menu_independiente_pilotos').style.display='none';
 			document.getElementById('div_pilotos').style.display='none';
 			document.getElementById('menu_independiente_maleteros').style.display='none';
 			document.getElementById('div_maleteros').style.display='none';
 			document.getElementById('menu_independiente_mecanicos').style.display='block';
 			
 		});

 		$("#btn_agregar_limpieza").click(function(event)
 		{
 			document.getElementById('div_limpieza').style.display='block';
 			document.getElementById('menu_independiente_limpieza').style.display='none';
 		});
 		$("#btn_cerrar_form_limpieza").click(function(event)
 		{
 			document.getElementById('div_limpieza').style.display='none';
 			document.getElementById('menu_independiente_limpieza').style.display='none';
 		});
 		$("#id_limpieza").click(function(event)
 		{
 			document.getElementById('menu_independiente_azafatas').style.display='none';
 			document.getElementById('div_azafatas').style.display='none';
 			document.getElementById('menu_independiente_mecanicos').style.display='none';
 			document.getElementById('div_mecanicos').style.display='none';
 			document.getElementById('menu_independiente_seguridad').style.display='none';
 			document.getElementById('div_seguridad').style.display='none';
 			document.getElementById('menu_independiente_pilotos').style.display='none';
 			document.getElementById('div_pilotos').style.display='none';
 			document.getElementById('menu_independiente_maleteros').style.display='none';
 			document.getElementById('div_maleteros').style.display='none';
 			document.getElementById('menu_independiente_limpieza').style.display='block';
 			
 		});

 		$("#btn_agregar_pilotos").click(function(event)
 		{
 			document.getElementById('div_pilotos').style.display='block';
 			document.getElementById('menu_independiente_pilotos').style.display='none';
 		});
 		$("#btn_cerrar_form_pilotos").click(function(event)
 		{
 			document.getElementById('div_pilotos').style.display='none';
 			document.getElementById('menu_independiente_pilotos').style.display='none';
 		});
 		$("#id_pilotos").click(function(event)
 		{
 			document.getElementById('menu_independiente_azafatas').style.display='none';
 			document.getElementById('div_azafatas').style.display='none';
 			document.getElementById('menu_independiente_mecanicos').style.display='none';
 			document.getElementById('div_mecanicos').style.display='none';
 			document.getElementById('menu_independiente_limpieza').style.display='none';
 			document.getElementById('div_limpieza').style.display='none';
 			document.getElementById('menu_independiente_seguridad').style.display='none';
 			document.getElementById('div_seguridad').style.display='none';
 			document.getElementById('menu_independiente_maleteros').style.display='none';
 			document.getElementById('div_maleteros').style.display='none';
 			document.getElementById('menu_independiente_pilotos').style.display='block';

 		});

 		$("#btn_agregar_maleteros").click(function(event)
 		{
 			document.getElementById('div_maleteros').style.display='block';
 			document.getElementById('menu_independiente_maleteros').style.display='none';
 		});
 		$("#btn_cerrar_form_maletero").click(function(event)
 		{
 			document.getElementById('div_maleteros').style.display='none';
 			document.getElementById('menu_independiente_maleteros').style.display='none';
 		});
 		$("#id_maleteros").click(function(event)
 		{
 			document.getElementById('menu_independiente_azafatas').style.display='none';
 			document.getElementById('div_azafatas').style.display='none';
 			document.getElementById('menu_independiente_mecanicos').style.display='none';
 			document.getElementById('div_mecanicos').style.display='none';
 			document.getElementById('menu_independiente_limpieza').style.display='none';
 			document.getElementById('div_limpieza').style.display='none';
 			document.getElementById('menu_independiente_pilotos').style.display='none';
 			document.getElementById('div_pilotos').style.display='none';
 			document.getElementById('menu_independiente_seguridad').style.display='none';
 			document.getElementById('div_seguridad').style.display='none';
 			document.getElementById('menu_independiente_maleteros').style.display='block';

 		});

 		$("#btn_agregar_seguridad").click(function(event)
 		{
 			document.getElementById('div_seguridad').style.display='block';
 			document.getElementById('menu_independiente_seguridad').style.display='none';
 		});
 		$("#btn_cerrar_form_seguridad").click(function(event)
 		{
 			document.getElementById('div_seguridad').style.display='none';
 			document.getElementById('menu_independiente_seguridad').style.display='none';
 		});
 		$("#id_seguridad").click(function(event)
 		{
 			document.getElementById('menu_independiente_azafatas').style.display='none';
 			document.getElementById('div_azafatas').style.display='none';
 			document.getElementById('menu_independiente_mecanicos').style.display='none';
 			document.getElementById('div_mecanicos').style.display='none';
 			document.getElementById('menu_independiente_limpieza').style.display='none';
 			document.getElementById('div_limpieza').style.display='none';
 			document.getElementById('menu_independiente_pilotos').style.display='none';
 			document.getElementById('div_pilotos').style.display='none';
 			document.getElementById('menu_independiente_maleteros').style.display='none';
 			document.getElementById('div_maleteros').style.display='none';
 			document.getElementById('menu_independiente_seguridad').style.display='block';

 		});

 		$("#btn_aceptar_azafata").click(function(event)
 		{
 			$(".form_agregar_azafata").submit();
 		});
 		$(".form_agregar_azafata").validate(
 			{
 				ignore: [],
 				rules:
 				{
 					nom_azafata:
 					{
 						required: true,
 						letteronly: true,
 					},
 					ap_azafata:
 					{
 						required: true,
 						letteronly: true,
 					},
 					am_azafata:
 					{
 						required: true,
 						letteronly: true,
 					},
 					dia_azafata:
 					{
 						required: true,
 						numonly: true,
 					},
 					mes_azafata:
 					{
 						required: true,
 						numonly: true,
 					},
 					ano_azafata:
 					{
 						required: true,
 						numonly: true,
 					},
 					curp_azafata:
 					{
 						required: true,
 						letteronly: true,
 					},
 					telefono_movil_azafata:
 					{
 						required: true,
 						numonly: true,
 					},
 					direccion_azafata:
 					{
 						required: true,
 						letteronly: true,
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
 					curp_azafata:
 					{
 						required: "ingresa el curp",
 					},
 					telefono_movil_azafata:
 					{
 						required: "ingresa un numero telefonico",
 					},
 					direccion_azafata:
 					{
 						required: "ingresa la direccion",

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

 		$("#btn_aceptar_mecanico").click(function(event)
 		{
 			$(".form_agregar_mecanicos").submit();
 		});
 		$(".form_agregar_mecanicos").validate(
 			{
 				ignore: [],
 				rules:
 				{
 					nom_mecanico:
 					{
 						required: true,
 						letteronly: true,
 					},
 					ap_mecanico:
 					{
 						required: true,
 						letteronly: true,
 					},
 					am_mecanico:
 					{
 						required: true,
 						letteronly: true,
 					},
 					dia_mecanico:
 					{
 						required: true,
 						numonly: true,
 					},
 					mes_mecanico:
 					{
 						required: true,
 						numonly: true,
 					},
 					ano_mecanico:
 					{
 						required: true,
 						numonly: true,
 					},
 					curp_mecanico:
 					{
 						required: true,
 						letteronly: true,
 					},
 					telefono_movil_mecanico:
 					{
 						required: true,
 						numonly: true,
 					},
 					direccion_mecanico:
 					{
 						required: true,
 						letteronly: true,
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
 					curp_mecanico:
 					{
 						required: "ingresa el curp",
 					},
 					telefono_movil_mecanico:
 					{
 						required: "ingresa un numero telefonico",
 					},
 					direccion_mecanico:
 					{
 						required: "ingresa la direccion",

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

 		$("#btn_aceptar_limpieza").click(function(event)
 		{
 			$(".form_agregar_limpieza").submit();
 		});
 		$(".form_agregar_limpieza").validate(
 			{
 				ignore: [],
 				rules:
 				{
 					nom_limpieza:
 					{
 						required: true,
 						letteronly: true,
 					},
 					ap_limpieza:
 					{
 						required: true,
 						letteronly: true,
 					},
 					am_limpieza:
 					{
 						required: true,
 						letteronly: true,
 					},
 					dia_limpieza:
 					{
 						required: true,
 						numonly: true,
 					},
 					mes_limpieza:
 					{
 						required: true,
 						numonly: true,
 					},
 					ano_limpieza:
 					{
 						required: true,
 						numonly: true,
 					},
 					curp_limpieza:
 					{
 						required: true,
 						letteronly: true,
 					},
 					telefono_movil_limpieza:
 					{
 						required: true,
 						numonly: true,
 					},
 					direccion_limpieza:
 					{
 						required: true,
 						letteronly: true,
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
 					curp_limpieza:
 					{
 						required: "ingresa el curp",
 					},
 					telefono_movil_limpieza:
 					{
 						required: "ingresa un numero telefonico",
 					},
 					direccion_limpieza:
 					{
 						required: "ingresa la direccion",

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

 		$("#btn_aceptar_pilotos").click(function(event)
 		{
 			$(".form_agregar_pilotos").submit();
 		});
 		$(".form_agregar_pilotos").validate(
 			{
 				ignore: [],
 				rules:
 				{
 					nom_pilotos:
 					{
 						required: true,
 						letteronly: true,
 					},
 					ap_pilotos:
 					{
 						required: true,
 						letteronly: true,
 					},
 					am_pilotos:
 					{
 						required: true,
 						letteronly: true,
 					},
 					dia_pilotos:
 					{
 						required: true,
 						numonly: true,
 					},
 					mes_pilotos:
 					{
 						required: true,
 						numonly: true,
 					},
 					ano_pilotos:
 					{
 						required: true,
 						numonly: true,
 					},
 					curp_pilotos:
 					{
 						required: true,
 						letteronly: true,
 					},
 					telefono_movil_pilotos:
 					{
 						required: true,
 						numonly: true,
 					},
 					direccion_pilotos:
 					{
 						required: true,
 						letteronly: true,
 					},
 				},
 				messages:
 				{
 					nom_pilotos:
 					{
 						required: "ingresa el nombre",
 					},
 					ap_pilotos:
 					{
 						required: "ingresa el apellido paterno",
 					},
 					am_pilotos:
 					{
 						required: "ingresa el apellido materno",
 					},
 					dia_pilotos:
 					{
 						required: "ingresa el dia de nacimiento",
 					},
 					mes_pilotos:
 					{
 						required: "ingresa el mes de nacimiento",
 					},
 					ano_pilotos:
 					{
 						required: "ingresa el año de nacimiento",

 					},
 					curp_pilotos:
 					{
 						required: "ingresa el curp",
 					},
 					telefono_movil_pilotos:
 					{
 						required: "ingresa un numero telefonico",
 					},
 					direccion_pilotos:
 					{
 						required: "ingresa la direccion",

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

 		$("#btn_aceptar_maletero").click(function(event)
 		{
 			$(".form_agregar_maleteros").submit();
 		});
 		$(".form_agregar_maleteros").validate(
 			{
 				ignore: [],
 				rules:
 				{
 					nom_maletero:
 					{
 						required: true,
 						letteronly: true,
 					},
 					ap_maletero:
 					{
 						required: true,
 						letteronly: true,
 					},
 					am_maletero:
 					{
 						required: true,
 						letteronly: true,
 					},
 					dia_maletero:
 					{
 						required: true,
 						numonly: true,
 					},
 					mes_maletero:
 					{
 						required: true,
 						numonly: true,
 					},
 					ano_maletero:
 					{
 						required: true,
 						numonly: true,
 					},
 					curp_maletero:
 					{
 						required: true,
 						letteronly: true,
 					},
 					telefono_movil_maletero:
 					{
 						required: true,
 						numonly: true,
 					},
 					direccion_maletero:
 					{
 						required: true,
 						letteronly: true,
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
 					curp_maletero:
 					{
 						required: "ingresa el curp",
 					},
 					telefono_movil_maletero:
 					{
 						required: "ingresa un numero telefonico",
 					},
 					direccion_maletero:
 					{
 						required: "ingresa la direccion",

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

 		$("#btn_aceptar_seguridad").click(function(event)
 		{
 			$(".form_agregar_seguridad").submit();
 		});
 		$(".form_agregar_seguridad").validate(
 			{
 				ignore: [],
 				rules:
 				{
 					nom_seguridad:
 					{
 						required: true,
 						letteronly: true,
 					},
 					ap_seguridad:
 					{
 						required: true,
 						letteronly: true,
 					},
 					am_seguridad:
 					{
 						required: true,
 						letteronly: true,
 					},
 					dia_seguridad:
 					{
 						required: true,
 						numonly: true,
 					},
 					mes_seguridad:
 					{
 						required: true,
 						numonly: true,
 					},
 					ano_seguridad:
 					{
 						required: true,
 						numonly: true,
 					},
 					curp_seguridad:
 					{
 						required: true,
 						letteronly: true,
 					},
 					telefono_movil_seguridad:
 					{
 						required: true,
 						numonly: true,
 					},
 					direccion_seguridad:
 					{
 						required: true,
 						letteronly: true,
 					},
 				},
 				messages:
 				{
 					nom_seguridad:
 					{
 						required: "ingresa el nombre",
 					},
 					ap_seguridad:
 					{
 						required: "ingresa el apellido paterno",
 					},
 					am_seguridad:
 					{
 						required: "ingresa el apellido materno",
 					},
 					dia_seguridad:
 					{
 						required: "ingresa el dia de nacimiento",
 					},
 					mes_seguridad:
 					{
 						required: "ingresa el mes de nacimiento",
 					},
 					ano_seguridad:
 					{
 						required: "ingresa el año de nacimiento",

 					},
 					curp_seguridad:
 					{
 						required: "ingresa el curp",
 					},
 					telefono_movil_seguridad:
 					{
 						required: "ingresa un numero telefonico",
 					},
 					direccion_seguridad:
 					{
 						required: "ingresa la direccion",

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

 			jQuery.validator.addMethod('letteronly',function(value,element){
				return this.optional(element)||/^[a-z ""]+$/i.test(value);
			},"este campo solo debe contener letras");
			jQuery.validator.addMethod('numonly',function(value,element)
			{
				return this.optional(element)||/^[0,1,2,3,4,5,6,7,8,9 ""]+$/i.test(value);
			},"este campo solo debe contener numeros");
 		
 	});
 </script>
 <main style="">
		 <div class="row col s12 white" style="width: 100%;">
		 	<div class="col s12">
			      <ul class="tabs center">
			        <li class="tab col l3 m4 s12" id="id_azafatas" class="id_azafatas" ><a class="indigo-text" href="#test1" >AZAFATAS</a></li>
			        <li class="tab col l3 m4 s12"><a class="indigo-text" id="id_mecanicos" class="id_mecanicos" href="#test2">MECANICOS</a></li>
			        <li class="tab col l3 m4 s12"><a class="indigo-text" id="id_limpieza" class="id_limpieza" href="#test3">LIMPIEZA</a></li>
			        <li class="tab col l3 m4 s12"><a class="indigo-text" id="id_pilotos" class="id_pilotos" href="#test4">PILOTOS</a></li>
					<li class="tab col l3 m4 s12"><a class="indigo-text" id="id_maleteros" class="id_maleteros" href="#test5">MALETEROS</a></li>
					<li class="tab col l3 m4 s12"><a class="indigo-text" id="id_seguridad" class="id_seguridad" href="#test5">SEGURIDAD</a></li>

			      </ul>
			 </div>
			 <br>
			 <div class=" col s2 offset -s2" id="menu_independiente_azafatas"  class="menu_independiente_azafatas" style="display: none; margin-left: 3%;">
			 	<div class="col s12">
			 		<ul class="tabs left">
			 			<li class="col l2 m4 s12" style="width: 100%; align-self: left;"> <a href="#" class="indigno-text">ver azafatas</a></li>
			 		</ul>
			 	</div>
			 	<div class="col s12" >
			 		<ul class="tabs left">
			 			<li class="col l2 m4 s12" style="width: 100%;"> <a href="#" class="indigno-text;" id="btn_agregar_azafata">agregar azafata</a></li>
			 		</ul>
			 	</div>
			 </div>
			 <div class=" col s2 offset -s5" id="menu_independiente_mecanicos"  class="menu_independiente_mecanicos" style="display: none; margin-left: 19%;">
			 	<div class="col s12">
			 		<ul class="tabs left">
			 			<li class="col l2 m4 s12" style="width: 100%; align-self: left;"> <a href="#" class="indigno-text">ver mecanicos</a></li>
			 		</ul>
			 	</div>
			 	<div class="col s12" >
			 		<ul class="tabs left">
			 			<li class="col l2 m4 s12" style="width: 100%;"> <a href="#" class="indigno-text " id="btn_agregar_mecanico">agregar mecanicos</a></li>
			 		</ul>
			 	</div>
			 </div>

			 <div class=" col s3 offset -s5" id="menu_independiente_limpieza"  class="menu_independiente_limpieza" style="display: none; margin-left: 35%;">
			 	<div class="col s12">
			 		<ul class="left">
			 			<li class="col l2 m4 s12" style="width: 100%; align-self: left;"> <a href="#" class="indigno-text">ver personal limpieza</a></li>
			 		</ul>
			 	</div>
			 	<div class="col s12" >
			 		<ul class="left">
			 			<li class="col l2 m4 s12" style="width: 100%;"> <a href="#" class="indigno-text " id="btn_agregar_limpieza">agregar personal limpieza</a></li>
			 		</ul>
			 	</div>
			 </div>

			 <div class=" col s3 offset -s5" id="menu_independiente_pilotos"  class="menu_independiente_pilotos" style="display: none; margin-left: 53%;">
			 	<div class="col s12">
			 		<ul class="left">
			 			<li class="col l2 m4 s12" style="width: 100%; align-self: left;"> <a href="#" class="indigno-text">ver pilotos</a></li>
			 		</ul>
			 	</div>
			 	<div class="col s12" >
			 		<ul class="left">
			 			<li class="col l2 m4 s12" style="width: 100%;"> <a href="#" class="indigno-text;" id="btn_agregar_pilotos">agregar pilotos</a></li>
			 		</ul>
			 	</div>
			 </div>

			 <div class=" col s3 offset -s5" id="menu_independiente_maleteros"  class="menu_independiente_maleteros" style="display: none; margin-left: 68%;">
			 	<div class="col s12">
			 		<ul class="left">
			 			<li class="col l2 m4 s12" style="width: 100%; align-self: left;"> <a href="#" class="indigno-text">ver maleteros</a></li>
			 		</ul>
			 	</div>
			 	<div class="col s12" >
			 		<ul class="left">
			 			<li class="col l2 m4 s12" style="width: 100%;"> <a href="#" class="indigno-text " id="btn_agregar_maleteros">agregar maleteros</a></li>
			 		</ul>
			 	</div>
			 </div>

			 <div class=" col s3 offset -s5" id="menu_independiente_seguridad"  class="menu_independiente_seguridad" style="display: none; margin-left: 76%;">
			 	<div class="col s12">
			 		<ul class="center">
			 			<li class="col l2 m4 s12" style="width: 100%; margin-left: 6%;"> <a href="#" class="indigno-text">ver personal de seguridad</a></li>
			 		</ul>
			 	</div>
			 	<div class="col s12" >
			 		<ul class="right">
			 			<li class="col l2 m4 s12" style="width: 100%;"> <a href="#" class="indigno-text " id="btn_agregar_seguridad">agregar personal de seguridad</a></li>
			 		</ul>
			 	</div>
			 </div>
			 <div class="div_azafatas col s7 " id="div_azafatas" style="margin-left: 25%; margin-top: 3%; display: none; border-color: lightgrey; border-style: solid; border-width: 2px; border-radius: 4px;">
			 <div class="col s12" style="width: 100%;"><h4 class="col s12" style="align-self: center; width: 100%;">AGREGAR NUEVO PERSONAL A AZAFATAS</h4></div>
				
					<div class="row">
						<div class="row-content">
							<form class="form_agregar_azafata">
							<div class="row">
				              <div class="input-field col s12">
				                <input id="nom_azafata" type="text" name="nom_azafata" class="validate" data-error=".error_nom_azafata">
				                <label for="nom_azafata">ingresa nombre</label>
				                <div class="error_nom_azafata red-text"></div> 
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
				          <div class="row col s4" style="padding: 0;">
				              <div class="input-field col s12">
				                <input id="dia_azafata" type="text" name="dia_azafata" class="validate" data-error=".error_dia_azafata">
				                <label for="dia_azafata">ingresa dia de nacimiento</label>
				                <div class="error_dia_azafata red-text"></div> 
				              </div>
				          </div>
				          <div class="row col s4 style="padding: 0;"">
				              <div class="input-field col s12">
				                <input id="mes_azafata" type="text" name="mes_azafata" class="validate" data-error=".error_mes_azafata">
				                <label for="mes_azafata">ingresa mes de nacimiento</label>
				                <div class="error_mes_azafata red-text"></div> 
				              </div>
				          </div>
				          <div class="row col s4 style="padding: 0;"">
				              <div class="input-field col s12">
				                <input id="ano_azafata" type="text" name="ano_azafata" class="validate" data-error=".error_ano_azafata">
				                <label for="ano_azafata">ingresa año de nacimiento</label>
				                <div class="error_ano_azafata red-text"></div> 
				              </div>
				          </div>
				          <div class="row">
				              <div class="input-field col s12">
				                <input id="curp_azafata" type="text" name="curp_azafata" class="validate" data-error=".error_curp_azafata">
				                <label for="curp_azafata">ingresa clave curp</label>
				                <div class="error_curp_azafata red-text"></div> 
				              </div>
				          </div>
				          <div class="row">
				              <div class="input-field col s12">
				                <input id="telefono_movil_azafata" type="text" name="telefono_movil_azafata" class="validate" data-error=".error_telefono_movil_azafata">
				                <label for="telefono_movil_azafata">ingresa numero de telefono (celular)</label>
				                <div class="error_telefono_movil_azafata red-text"></div> 
				              </div>
				          </div>
				          <div class="row">
				              <div class="input-field col s12">
				                <input id="direccion_azafata" type="text" name="direccion_azafata" class="validate" data-error=".error_direccion_azafata">
				                <label for="direccion_azafata">ingresa la direccion</label>
				                <div class="error_direccion_azafata red-text"></div> 
				              </div>
				          </div>

						</form>
						</div>

						
					</div>
					<div class="botones_formulario">
						
						<a href="#" class="btn-flat waves-effect waves light btn" id="btn_aceptar_azafata">Aceptar</a>
			        <a href="#" class="btn-flat waves-effect waves light btn modal-close" id="btn_cerrar_form">Cancelar</a>
					</div>
				
			</div>
			<div class="div_mecanicos col s7 " id="div_mecanicos" style="margin-left: 25%; margin-top: 3%; display: none; border-color: lightgrey; border-style: solid; border-width: 2px; border-radius: 4px;">
			 <div class="col s12" style="width: 100%;"><h4 class="col s12" style="align-self: center; width: 100%;">AGREGAR NUEVO PERSONAL A MECANICOS</h4></div>
				
					<div class="row">
						<form class="form_agregar_mecanicos">
							<div class="row">
				              <div class="input-field col s12">
				                <input id="nom_mecanico" type="text" name="nom_mecanico" class="validate" data-error=".error_nom_mecanico">
				                <label for="nom_mecanico">ingresa nombre</label>
				                <div class="error_nom_mecanico red-text"></div> 
				              </div>
				          </div>
				          <div class="row">
				              <div class="input-field col s12">
				                <input id="ap_mecanico" type="text" name="ap_mecanico" class="validate" data-error=".error_ap_mecanico">
				                <label for="ap_manicoec">ingresa apellido paterno</label>
				                <div class="error_ap_mecanico red-text"></div> 
				              </div>
				          </div>
				          <div class="row">
				              <div class="input-field col s12">
				                <input id="am_mecanico" type="text" name="am_mecanico" class="validate" data-error=".error_mecanico">
				                <label for="am_mecanico">ingresa apellido materno</label>
				                <div class="error_mecanico red-text"></div> 
				              </div>
				          </div>
				          <div class="row col s4" style="padding: 0;">
				              <div class="input-field col s12">
				                <input id="dia_mecanico" type="text" name="dia_mecanico" class="validate" data-error=".error_dia_mecanico">
				                <label for="dia_mecanico">ingresa dia de nacimiento</label>
				                <div class="error_dia_mecanico red-text"></div> 
				              </div>
				          </div>
				          <div class="row col s4" style="padding: 0;">
				              <div class="input-field col s12">
				                <input id="mes_mecanico" type="text" name="mes_mecanico" class="validate" data-error=".error_mes_mecanico">
				                <label for="mes_mecanico">ingresa mes de nacimiento</label>
				                <div class="error_mes_mecanico red-text"></div> 
				              </div>
				          </div>
				          <div class="row col s4" style="padding: 0;">
				              <div class="input-field col s12">
				                <input id="ano_mecanico" type="text" name="ano_mecanico" class="validate" data-error=".error_ano_mecanico">
				                <label for="ano_mecanico">ingresa año de nacimiento</label>
				                <div class="error_ano_mecanico red-text"></div> 
				              </div>
				          </div>
				          <div class="row">
				              <div class="input-field col s12">
				                <input id="curp_mecanico" type="text" name="curp_mecanico" class="validate" data-error=".error_curp_mecanico">
				                <label for="curp_mecanico">ingresa clave curp</label>
				                <div class="error_curp_mecanico red-text"></div> 
				              </div>
				          </div>
				          <div class="row">
				              <div class="input-field col s12">
				                <input id="telefono_movil_mecanico" type="text" name="telefono_movil_mecanico" class="validate" data-error=".error_telefono_movil_mecanico">
				                <label for="telefono_movil_mecanico">ingresa numero de telefono (celular)</label>
				                <div class="error_telefono_movil_mecanico red-text"></div> 
				              </div>
				          </div>
				          <div class="row">
				              <div class="input-field col s12">
				                <input id="direccion_mecanico" type="text" name="direccion_mecanico" class="validate" data-error=".error_direccion_mecanico">
				                <label for="direccion_mecanico">ingresa la direccion</label>
				                <div class="error_direccion_mecanico red-text"></div> 
				              </div>
				          </div>
						</form>

						
					</div>
					<div class="botones_formulario">
						
						<a href="#" class="btn-flat waves-effect waves light btn" id="btn_aceptar_mecanico">Aceptar</a>
			        <a href="#" class="btn-flat waves-effect waves light btn modal-close" id="btn_cerrar_form_mecanicos">Cancelar</a>
					</div>
				
			</div>

			<div class="div_limpieza col s7 " id="div_limpieza" style="margin-left: 25%; margin-top: 3%; display: none; border-color: lightgrey; border-style: solid; border-width: 2px; border-radius: 4px;">
			 <div class="col s12" style="width: 100%;"><h4 class="col s12" style="align-self: center; width: 100%;">AGREGAR NUEVO PERSONAL A LIMPIEZA</h4></div>
				
					<div class="row">
						<form class="form_agregar_limpieza">
							<div class="row">
				              <div class="input-field col s12">
				                <input id="nom_limpieza" type="text" name="nom_limpieza" class="validate" data-error=".error_nom_limpieza">
				                <label for="nom_limpieza">ingresa nombre</label>
				                <div class="error_nom_limpieza red-text"></div> 
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
				          <div class="row col s4" style="padding: 0;">
				              <div class="input-field col s12">
				                <input id="dia_limpieza" type="text" name="dia_limpieza" class="validate" data-error=".error_dia_limpieza">
				                <label for="dia_limpieza">ingresa dia de nacimiento</label>
				                <div class="error_dia_limpieza red-text"></div> 
				              </div>
				          </div>
				          <div class="row col s4" style="padding: 0;">
				              <div class="input-field col s12">
				                <input id="mes_limpieza" type="text" name="mes_limpieza" class="validate" data-error=".error_mes_limpieza">
				                <label for="mes_limpieza">ingresa mes de nacimiento</label>
				                <div class="error_mes_limpieza red-text"></div> 
				              </div>
				          </div>
				          <div class="row col s4" style="padding: 0;">
				              <div class="input-field col s12">
				                <input id="ano_limpieza" type="text" name="ano_limpieza" class="validate" data-error=".error_ano_limpieza">
				                <label for="ano_limpieza">ingresa año de nacimiento</label>
				                <div class="error_ano_limpieza red-text"></div> 
				              </div>
				          </div>
				          <div class="row">
				              <div class="input-field col s12">
				                <input id="curp_limpieza" type="text" name="curp_limpieza" class="validate" data-error=".error_curp_limpieza">
				                <label for="curp_limpieza">ingresa clave curp</label>
				                <div class="error_curp_limpieza red-text"></div> 
				              </div>
				          </div>
				          <div class="row">
				              <div class="input-field col s12">
				                <input id="telefono_movil_limpieza" type="text" name="telefono_movil_limpieza" class="validate" data-error=".error_telefono_movil_limpieza">
				                <label for="telefono_movil_limpieza">ingresa numero de telefono (celular)</label>
				                <div class="error_telefono_movil_limpieza red-text"></div> 
				              </div>
				          </div>
				          <div class="row">
				              <div class="input-field col s12">
				                <input id="direccion_limpieza" type="text" name="direccion_limpieza" class="validate" data-error=".error_direccion_limpieza">
				                <label for="direccion_limpieza">ingresa la direccion</label>
				                <div class="error_direccion_limpieza red-text"></div> 
				              </div>
				          </div>
						</form>

						
					</div>
					<div class="botones_formulario">
						
						<a href="#" class="btn-flat waves-effect waves light btn" id="btn_aceptar_limpieza">Aceptar</a>
			        <a href="#" class="btn-flat waves-effect waves light btn modal-close" id="btn_cerrar_form_limpieza">Cancelar</a>
					</div>
				
			</div>

			<div class="div_maleteros col s7 " id="div_maleteros" style="margin-left: 25%; margin-top: 3%; display: none; border-color: lightgrey; border-style: solid; border-width: 2px; border-radius: 4px;">
			 <div class="col s12" style="width: 100%;"><h4 class="col s12" style="align-self: center; width: 100%;">AGREGAR NUEVO PERSONAL A MALETEROS</h4></div>
				
					<div class="row">
						<form class="form_agregar_maleteros">
							<div class="row">
				              <div class="input-field col s12">
				                <input id="nom_maletero" type="text" name="nom_maletero" class="validate" data-error=".error_nom_maletero">
				                <label for="nom_maletero">ingresa nombre</label>
				                <div class="error_nom_maletero red-text"></div> 
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
				                <input id="am_maletero" type="text" name="am_maletero" class="validate" data-error=".error_maletero">
				                <label for="am_maletero">ingresa apellido materno</label>
				                <div class="error_maletero red-text"></div> 
				              </div>
				          </div>
				          <div class="row col s4" style="padding: 0;">
				              <div class="input-field col s12">
				                <input id="dia_maletero" type="text" name="dia_maletero" class="validate" data-error=".error_dia_maletero">
				                <label for="dia_maletero">ingresa dia de nacimiento</label>
				                <div class="error_dia_maletero red-text"></div> 
				              </div>
				          </div>
				          <div class="row col s4" style="padding: 0;">
				              <div class="input-field col s12">
				                <input id="mes_maletero" type="text" name="mes_maletero" class="validate" data-error=".error_mes_maletero">
				                <label for="mes_maletero">ingresa mes de nacimiento</label>
				                <div class="error_mes_maletero red-text"></div> 
				              </div>
				          </div>
				          <div class="row col s4" style="padding: 0;">
				              <div class="input-field col s12">
				                <input id="ano_maletero" type="text" name="ano_maletero" class="validate" data-error=".error_ano_maletero">
				                <label for="ano_maletero">ingresa año de nacimiento</label>
				                <div class="error_ano_maletero red-text"></div> 
				              </div>
				          </div>
				          <div class="row">
				              <div class="input-field col s12">
				                <input id="curp_maletero" type="text" name="curp_maletero" class="validate" data-error=".error_curp_maletero">
				                <label for="curp_maletero">ingresa clave curp</label>
				                <div class="error_curp_maletero red-text"></div> 
				              </div>
				          </div>
				          <div class="row">
				              <div class="input-field col s12">
				                <input id="telefono_movil_maletero" type="text" name="telefono_movil_maletero" class="validate" data-error=".error_telefono_movil_maletero">
				                <label for="telefono_movil_maletero">ingresa numero de telefono (celular)</label>
				                <div class="error_telefono_movil_maletero red-text"></div> 
				              </div>
				          </div>
				          <div class="row">
				              <div class="input-field col s12">
				                <input id="direccion_maletero" type="text" name="direccion_maletero" class="validate" data-error=".error_direccion_maletero">
				                <label for="direccion_maletero">ingresa la direccion</label>
				                <div class="error_direccion_maletero red-text"></div> 
				              </div>
				          </div>
						</form>

						
					</div>
					<div class="botones_formulario">
						
						<a href="#" class="btn-flat waves-effect waves light btn" id="btn_aceptar_maletero">Aceptar</a>
			        <a href="#" class="btn-flat waves-effect waves light btn modal-close" id="btn_cerrar_form_maletero">Cancelar</a>
					</div>
				
			</div>
			<div class="div_pilotos col s7 " id="div_pilotos" style="margin-left: 25%; margin-top: 3%; display: none; border-color: lightgrey; border-style: solid; border-width: 2px; border-radius: 4px;">
			 <div class="col s12" style="width: 100%;"><h4 class="col s12" style="align-self: center; width: 100%;">AGREGAR NUEVO PERSONAL A PILOTOS</h4></div>
				
					<div class="row">
						<form class="form_agregar_pilotos">
							<div class="row">
				              <div class="input-field col s12">
				                <input id="nom_pilotos" type="text" name="nom_pilotos" class="validate" data-error=".error_nom_pilotos">
				                <label for="nom_pilotos">ingresa nombre</label>
				                <div class="error_nom_pilotos red-text"></div> 
				              </div>
				          </div>
				          <div class="row">
				              <div class="input-field col s12">
				                <input id="ap_pilotos" type="text" name="ap_pilotos" class="validate" data-error=".error_ap_pilotos">
				                <label for="ap_pilotos">ingresa apellido paterno</label>
				                <div class="error_ap_pilotos red-text"></div> 
				              </div>
				          </div>
				          <div class="row">
				              <div class="input-field col s12">
				                <input id="am_pilotos" type="text" name="am_pilotos" class="validate" data-error=".error_pilotos">
				                <label for="am_pilotos">ingresa apellido materno</label>
				                <div class="error_pilotos red-text"></div> 
				              </div>
				          </div>
				          <div class="row col s4" style="padding: 0;">
				              <div class="input-field col s12">
				                <input id="dia_pilotos" type="text" name="dia_pilotos" class="validate" data-error=".error_dia_pilotos">
				                <label for="dia_pilotos">ingresa dia de nacimiento</label>
				                <div class="error_dia_pilotos red-text"></div> 
				              </div>
				          </div>
				          <div class="row col s4" style="padding: 0;">
				              <div class="input-field col s12">
				                <input id="mes_pilotos" type="text" name="mes_pilotos" class="validate" data-error=".error_mes_pilotos">
				                <label for="mes_pilotos">ingresa mes de nacimiento</label>
				                <div class="error_mes_pilotos red-text"></div> 
				              </div>
				          </div>
				          <div class="row col s4" style="padding: 0;">
				              <div class="input-field col s12">
				                <input id="ano_pilotos" type="text" name="ano_pilotos" class="validate" data-error=".error_ano_pilotos">
				                <label for="ano_pilotos">ingresa año de nacimiento</label>
				                <div class="error_ano_pilotos red-text"></div> 
				              </div>
				          </div>
				          <div class="row">
				              <div class="input-field col s12">
				                <input id="curp_pilotos" type="text" name="curp_pilotos" class="validate" data-error=".error_curp_pilotos">
				                <label for="curp_pilotos">ingresa clave curp</label>
				                <div class="error_curp_pilotos red-text"></div> 
				              </div>
				          </div>
				          <div class="row">
				              <div class="input-field col s12">
				                <input id="telefono_movil_pilotos" type="text" name="telefono_movil_pilotos" class="validate" data-error=".error_telefono_movil_pilotos">
				                <label for="telefono_movil_pilotos">ingresa numero de telefono (celular)</label>
				                <div class="error_telefono_movil_pilotos red-text"></div> 
				              </div>
				          </div>
				          <div class="row">
				              <div class="input-field col s12">
				                <input id="direccion_pilotos" type="text" name="direccion_pilotos" class="validate" data-error=".error_direccion_pilotos">
				                <label for="direccion_pilotos">ingresa la direccion</label>
				                <div class="error_direccion_pilotos red-text"></div> 
				              </div>
				          </div>
						</form>

						
					</div>
					<div class="botones_formulario">
						
						<a href="#" class="btn-flat waves-effect waves light btn" id="btn_aceptar_pilotos">Aceptar</a>
			        <a href="#" class="btn-flat waves-effect waves light btn modal-close" id="btn_cerrar_form_pilotos">Cancelar</a>
					</div>
				
			</div>
			<div class="div_seguridad col s7 " id="div_seguridad" style="margin-left: 25%; margin-top: 3%; display: none; border-color: lightgrey; border-style: solid; border-width: 2px; border-radius: 4px;">
			 <div class="col s12" style="width: 100%;"><h4 class="col s12" style="align-self: center; width: 100%;">AGREGAR NUEVO PERSONAL A SEGURIDAD</h4></div>
				
					<div class="row">
						<form class="form_agregar_seguridad">
							<div class="row">
				              <div class="input-field col s12">
				                <input id="nom_seguridad" type="text" name="nom_seguridad" class="validate" data-error=".error_nom_seguridad">
				                <label for="nom_seguridad">ingresa nombre</label>
				                <div class="error_nom_seguridad red-text"></div> 
				              </div>
				          </div>
				          <div class="row">
				              <div class="input-field col s12">
				                <input id="ap_seguridad" type="text" name="ap_seguridad" class="validate" data-error=".error_ap_seguridad">
				                <label for="ap_seguridad">ingresa apellido paterno</label>
				                <div class="error_ap_seguridad red-text"></div> 
				              </div>
				          </div>
				          <div class="row">
				              <div class="input-field col s12">
				                <input id="am_seguridad" type="text" name="am_seguridad" class="validate" data-error=".error_seguridad">
				                <label for="am_seguridad">ingresa apellido materno</label>
				                <div class="error_seguridad red-text"></div> 
				              </div>
				          </div>
				          <div class="row col s4" style="padding: 0;">
				              <div class="input-field col s12">
				                <input id="dia_seguridad" type="text" name="dia_seguridad" class="validate" data-error=".error_dia_seguridad">
				                <label for="dia_seguridad">ingresa dia de nacimiento</label>
				                <div class="error_dia_seguridad red-text"></div> 
				              </div>
				          </div>
				          <div class="row col s4" style="padding: 0;">
				              <div class="input-field col s12">
				                <input id="mes_seguridad" type="text" name="mes_seguridad" class="validate" data-error=".error_mes_seguridad">
				                <label for="mes_seguridad">ingresa mes de nacimiento</label>
				                <div class="error_mes_seguridad red-text"></div> 
				              </div>
				          </div>
				          <div class="row col s4" style="padding: 0;">
				              <div class="input-field col s12">
				                <input id="ano_seguridad" type="text" name="ano_seguridad" class="validate" data-error=".error_ano_seguridad">
				                <label for="ano_seguridad">ingresa año de nacimiento</label>
				                <div class="error_ano_seguridad red-text"></div> 
				              </div>
				          </div>
				          <div class="row">
				              <div class="input-field col s12">
				                <input id="curp_seguridad" type="text" name="curp_seguridad" class="validate" data-error=".error_curp_seguridad">
				                <label for="curp_seguridad">ingresa clave curp</label>
				                <div class="error_curp_seguridad red-text"></div> 
				              </div>
				          </div>
				          <div class="row">
				              <div class="input-field col s12">
				                <input id="telefono_movil_seguridad" type="text" name="telefono_movil_seguridad" class="validate" data-error=".error_telefono_movil_seguridad">
				                <label for="telefono_movil_seguridad">ingresa numero de telefono (celular)</label>
				                <div class="error_telefono_movil_seguridad red-text"></div> 
				              </div>
				          </div>
				          <div class="row">
				              <div class="input-field col s12">
				                <input id="direccion_seguridad" type="text" name="direccion_seguridad" class="validate" data-error=".error_direccion_seguridad">
				                <label for="direccion_seguridad">ingresa la direccion</label>
				                <div class="error_direccion_seguridad red-text"></div> 
				              </div>
				          </div>
						</form>

						
					</div>
					<div class="botones_formulario">
						
						<a href="#" class="btn-flat waves-effect waves light btn" id="btn_aceptar_seguridad">Aceptar</a>
			        <a href="#" class="btn-flat waves-effect waves light btn modal-close" id="btn_cerrar_form_seguridad">Cancelar</a>
					</div>
				
			</div>
		</div> <!-- div del row -->
		

		</main>
		<?php
  include("../partials/footer.php")
?>
	</body>
</html>

