<?php 
	include("../partials/head.php");
 ?>
 	 <script type="text/javascript">
  // $(document).ready(function(event)
  // {
  //   $("#btn_agregar_azafata").click(function(event)
  //   {
  //     document.getElementById('div_azafatas').style.display='block';
  //     document.getElementById('menu_independiente_azafatas').style.display='none';
  //   });
  //   $("#btn_cerrar_form").click(function(event)
  //   {
  //     document.getElementById('div_azafatas').style.display='none';
  //     document.getElementById('menu_independiente_azafatas').style.display='none';
  //   });
  //   $("#id_azafatas").click(function(event)
  //   {
  //     document.getElementById('menu_independiente_seguridad').style.display='none';
  //     document.getElementById('div_seguridad').style.display='none';
  //     document.getElementById('menu_independiente_mecanicos').style.display='none';
  //     document.getElementById('div_mecanicos').style.display='none';
  //     document.getElementById('menu_independiente_limpieza').style.display='none';
  //     document.getElementById('div_limpieza').style.display='none';
  //     document.getElementById('menu_independiente_pilotos').style.display='none';
  //     document.getElementById('div_pilotos').style.display='none';
  //     document.getElementById('menu_independiente_maleteros').style.display='none';
  //     document.getElementById('div_maleteros').style.display='none';
  //     document.getElementById('div_azafatas').style.display='none';
  //     document.getElementById('menu_independiente_azafatas').style.display='block';

  //   });

  //   $("#btn_agregar_mecanico").click(function(event)
  //   {
  //     document.getElementById('div_mecanicos').style.display='block';
  //     document.getElementById('menu_independiente_mecanicos').style.display='none';
  //   });
  //   $("#btn_cerrar_form_mecanicos").click(function(event)
  //   {
  //     document.getElementById('div_mecanicos').style.display='none';
  //     document.getElementById('menu_independiente_mecanicos').style.display='none';
  //   });
  //   $("#id_mecanicos").click(function(event)
  //   {
  //     document.getElementById('menu_independiente_azafatas').style.display='none';
  //     document.getElementById('div_azafatas').style.display='none';
  //     document.getElementById('menu_independiente_seguridad').style.display='none';
  //     document.getElementById('div_seguridad').style.display='none';
  //     document.getElementById('menu_independiente_limpieza').style.display='none';
  //     document.getElementById('div_limpieza').style.display='none';
  //     document.getElementById('menu_independiente_pilotos').style.display='none';
  //     document.getElementById('div_pilotos').style.display='none';
  //     document.getElementById('menu_independiente_maleteros').style.display='none';
  //     document.getElementById('div_maleteros').style.display='none';
  //     document.getElementById('div_mecanicos').style.display='none';
  //     document.getElementById('menu_independiente_mecanicos').style.display='block';
      
  //   });

  //   $("#btn_agregar_limpieza").click(function(event)
  //   {
  //     document.getElementById('div_limpieza').style.display='block';
  //     document.getElementById('menu_independiente_limpieza').style.display='none';
  //   });
  //   $("#btn_cerrar_form_limpieza").click(function(event)
  //   {
  //     document.getElementById('div_limpieza').style.display='none';
  //     document.getElementById('menu_independiente_limpieza').style.display='none';
  //   });
  //   $("#id_limpieza").click(function(event)
  //   {
  //     document.getElementById('menu_independiente_azafatas').style.display='none';
  //     document.getElementById('div_azafatas').style.display='none';
  //     document.getElementById('menu_independiente_mecanicos').style.display='none';
  //     document.getElementById('div_mecanicos').style.display='none';
  //     document.getElementById('menu_independiente_seguridad').style.display='none';
  //     document.getElementById('div_seguridad').style.display='none';
  //     document.getElementById('menu_independiente_pilotos').style.display='none';
  //     document.getElementById('div_pilotos').style.display='none';
  //     document.getElementById('menu_independiente_maleteros').style.display='none';
  //     document.getElementById('div_maleteros').style.display='none';
  //     document.getElementById('div_limpieza').style.display='none';
  //     document.getElementById('menu_independiente_limpieza').style.display='block';
      
  //   });

  //   $("#btn_agregar_pilotos").click(function(event)
  //   {
  //     document.getElementById('div_pilotos').style.display='block';
  //     document.getElementById('menu_independiente_pilotos').style.display='none';
  //   });
  //   $("#btn_cerrar_form_pilotos").click(function(event)
  //   {
  //     document.getElementById('div_pilotos').style.display='none';
  //     document.getElementById('menu_independiente_pilotos').style.display='none';
  //   });
  //   $("#id_pilotos").click(function(event)
  //   {
  //     document.getElementById('menu_independiente_azafatas').style.display='none';
  //     document.getElementById('div_azafatas').style.display='none';
  //     document.getElementById('menu_independiente_mecanicos').style.display='none';
  //     document.getElementById('div_mecanicos').style.display='none';
  //     document.getElementById('menu_independiente_limpieza').style.display='none';
  //     document.getElementById('div_limpieza').style.display='none';
  //     document.getElementById('menu_independiente_seguridad').style.display='none';
  //     document.getElementById('div_seguridad').style.display='none';
  //     document.getElementById('menu_independiente_maleteros').style.display='none';
  //     document.getElementById('div_maleteros').style.display='none';
  //     document.getElementById('div_pilotos').style.display='none';
  //     document.getElementById('menu_independiente_pilotos').style.display='block';

  //   });

  //   $("#btn_agregar_maleteros").click(function(event)
  //   {
  //     document.getElementById('div_maleteros').style.display='block';
  //     document.getElementById('menu_independiente_maleteros').style.display='none';
  //   });
  //   $("#btn_cerrar_form_maletero").click(function(event)
  //   {
  //     document.getElementById('div_maleteros').style.display='none';
  //     document.getElementById('menu_independiente_maleteros').style.display='none';
  //   });
  //   $("#id_maleteros").click(function(event)
  //   {
  //     document.getElementById('menu_independiente_azafatas').style.display='none';
  //     document.getElementById('div_azafatas').style.display='none';
  //     document.getElementById('menu_independiente_mecanicos').style.display='none';
  //     document.getElementById('div_mecanicos').style.display='none';
  //     document.getElementById('menu_independiente_limpieza').style.display='none';
  //     document.getElementById('div_limpieza').style.display='none';
  //     document.getElementById('menu_independiente_pilotos').style.display='none';
  //     document.getElementById('div_pilotos').style.display='none';
  //     document.getElementById('menu_independiente_seguridad').style.display='none';
  //     document.getElementById('div_seguridad').style.display='none';
  //     document.getElementById('div_maleteros').style.display='none';
  //     document.getElementById('menu_independiente_maleteros').style.display='block';

  //   });

  //   $("#btn_agregar_seguridad").click(function(event)
  //   {
  //     document.getElementById('div_seguridad').style.display='block';
  //     document.getElementById('menu_independiente_seguridad').style.display='none';
  //   });
  //   $("#btn_cerrar_form_seguridad").click(function(event)
  //   {
  //     document.getElementById('div_seguridad').style.display='none';
  //     document.getElementById('menu_independiente_seguridad').style.display='none';
  //   });
  //   $("#id_seguridad").click(function(event)
  //   {
  //     document.getElementById('menu_independiente_azafatas').style.display='none';
  //     document.getElementById('div_azafatas').style.display='none';
  //     document.getElementById('menu_independiente_mecanicos').style.display='none';
  //     document.getElementById('div_mecanicos').style.display='none';
  //     document.getElementById('menu_independiente_limpieza').style.display='none';
  //     document.getElementById('div_limpieza').style.display='none';
  //     document.getElementById('menu_independiente_pilotos').style.display='none';
  //     document.getElementById('div_pilotos').style.display='none';
  //     document.getElementById('menu_independiente_maleteros').style.display='none';
  //     document.getElementById('div_maleteros').style.display='none';
  //     document.getElementById('div_seguridad').style.display='none';
  //     document.getElementById('menu_independiente_seguridad').style.display='block';

  //   });
  //   $(".btn_aceptar_azafata").click(function(event)
  //   {
  //     $.post('controller.php',{action:"connect"});
  //   })

  //   $("#btn_aceptar_azafata").click(function(event)
  //   {
  //     $(".form_agregar_azafata").submit();
  //   });
  //   $(".form_agregar_azafata").validate(
  //     {
  //       ignore: [],
  //       rules:
  //       {
  //         nom_azafata:
  //         {
  //           required: true,
  //           letteronly: true,
  //         },
  //         ap_azafata:
  //         {
  //           required: true,
  //           letteronly: true,
  //         },
  //         am_azafata:
  //         {
  //           required: true,
  //           letteronly: true,
  //         },
  //         dia_azafata:
  //         {
  //           required: true,
  //           numonly: true,
  //         },
  //         mes_azafata:
  //         {
  //           required: true,
  //           numonly: true,
  //         },
  //         ano_azafata:
  //         {
  //           required: true,
  //           numonly: true,
  //         },
  //         curp_azafata:
  //         {
  //           required: true,
  //           letteronly: true,
  //         },
  //         telefono_movil_azafata:
  //         {
  //           required: true,
  //           numonly: true,
  //         },
  //         direccion_azafata:
  //         {
  //           required: true,
  //           letteronly: true,
  //         },
  //       },
  //       messages:
  //       {
  //         nom_azafata:
  //         {
  //           required: "ingresa el nombre",
  //         },
  //         ap_azafata:
  //         {
  //           required: "ingresa el apellido paterno",
  //         },
  //         am_azafata:
  //         {
  //           required: "ingresa el apellido materno",
  //         },
  //         dia_azafata:
  //         {
  //           required: "ingresa el dia de nacimiento",
  //         },
  //         mes_azafata:
  //         {
  //           required: "ingresa el mes de nacimiento",
  //         },
  //         ano_azafata:
  //         {
  //           required: "ingresa el año de nacimiento",
  //         },
  //         curp_azafata:
  //         {
  //           required: "ingresa el curp",
  //         },
  //         telefono_movil_azafata:
  //         {
  //           required: "ingresa un numero telefonico",
  //         },
  //         direccion_azafata:
  //         {
  //           required: "ingresa la direccion",

  //         },
  //       },

  //         errorElement:'div',
  //           errorPlacement:function(error,element)
  //           {
  //             var placement=$(element).data("error");
  //             if(placement)
  //                 $(placement).append(error);
  //               else
  //                 error.insertAfter(element);
  //           },

  //     });

  //   $("#btn_aceptar_mecanico").click(function(event)
  //   {
  //     $(".form_agregar_mecanicos").submit();
  //   });
  //   $(".form_agregar_mecanicos").validate(
  //     {
  //       ignore: [],
  //       rules:
  //       {
  //         nom_mecanico:
  //         {
  //           required: true,
  //           letteronly: true,
  //         },
  //         ap_mecanico:
  //         {
  //           required: true,
  //           letteronly: true,
  //         },
  //         am_mecanico:
  //         {
  //           required: true,
  //           letteronly: true,
  //         },
  //         dia_mecanico:
  //         {
  //           required: true,
  //           numonly: true,
  //         },
  //         mes_mecanico:
  //         {
  //           required: true,
  //           numonly: true,
  //         },
  //         ano_mecanico:
  //         {
  //           required: true,
  //           numonly: true,
  //         },
  //         curp_mecanico:
  //         {
  //           required: true,
  //           letteronly: true,
  //         },
  //         telefono_movil_mecanico:
  //         {
  //           required: true,
  //           numonly: true,
  //         },
  //         direccion_mecanico:
  //         {
  //           required: true,
  //           letteronly: true,
  //         },
  //       },
  //       messages:
  //       {
  //         nom_mecanico:
  //         {
  //           required: "ingresa el nombre",
  //         },
  //         ap_mecanico:
  //         {
  //           required: "ingresa el apellido paterno",
  //         },
  //         am_mecanico:
  //         {
  //           required: "ingresa el apellido materno",
  //         },
  //         dia_mecanico:
  //         {
  //           required: "ingresa el dia de nacimiento",
  //         },
  //         mes_mecanico:
  //         {
  //           required: "ingresa el mes de nacimiento",
  //         },
  //         ano_mecanico:
  //         {
  //           required: "ingresa el año de nacimiento",

  //         },
  //         curp_mecanico:
  //         {
  //           required: "ingresa el curp",
  //         },
  //         telefono_movil_mecanico:
  //         {
  //           required: "ingresa un numero telefonico",
  //         },
  //         direccion_mecanico:
  //         {
  //           required: "ingresa la direccion",

  //         },
  //       },

  //         errorElement:'div',
  //           errorPlacement:function(error,element)
  //           {
  //             var placement=$(element).data("error");
  //             if(placement)
  //                 $(placement).append(error);
  //               else
  //                 error.insertAfter(element);
  //           },

  //     });

  //   $("#btn_aceptar_limpieza").click(function(event)
  //   {
  //     $(".form_agregar_limpieza").submit();
  //   });
  //   $(".form_agregar_limpieza").validate(
  //     {
  //       ignore: [],
  //       rules:
  //       {
  //         nom_limpieza:
  //         {
  //           required: true,
  //           letteronly: true,
  //         },
  //         ap_limpieza:
  //         {
  //           required: true,
  //           letteronly: true,
  //         },
  //         am_limpieza:
  //         {
  //           required: true,
  //           letteronly: true,
  //         },
  //         dia_limpieza:
  //         {
  //           required: true,
  //           numonly: true,
  //         },
  //         mes_limpieza:
  //         {
  //           required: true,
  //           numonly: true,
  //         },
  //         ano_limpieza:
  //         {
  //           required: true,
  //           numonly: true,
  //         },
  //         curp_limpieza:
  //         {
  //           required: true,
  //           letteronly: true,
  //         },
  //         telefono_movil_limpieza:
  //         {
  //           required: true,
  //           numonly: true,
  //         },
  //         direccion_limpieza:
  //         {
  //           required: true,
  //           letteronly: true,
  //         },
  //       },
  //       messages:
  //       {
  //         nom_limpieza:
  //         {
  //           required: "ingresa el nombre",
  //         },
  //         ap_limpieza:
  //         {
  //           required: "ingresa el apellido paterno",
  //         },
  //         am_limpieza:
  //         {
  //           required: "ingresa el apellido materno",
  //         },
  //         dia_limpieza:
  //         {
  //           required: "ingresa el dia de nacimiento",
  //         },
  //         mes_limpieza:
  //         {
  //           required: "ingresa el mes de nacimiento",
  //         },
  //         ano_limpieza:
  //         {
  //           required: "ingresa el año de nacimiento",

  //         },
  //         curp_limpieza:
  //         {
  //           required: "ingresa el curp",
  //         },
  //         telefono_movil_limpieza:
  //         {
  //           required: "ingresa un numero telefonico",
  //         },
  //         direccion_limpieza:
  //         {
  //           required: "ingresa la direccion",

  //         },
  //       },

  //         errorElement:'div',
  //           errorPlacement:function(error,element)
  //           {
  //             var placement=$(element).data("error");
  //             if(placement)
  //                 $(placement).append(error);
  //               else
  //                 error.insertAfter(element);
  //           },

  //     });

  //   $("#btn_aceptar_pilotos").click(function(event)
  //   {
  //     $(".form_agregar_pilotos").submit();
  //   });
  //   $(".form_agregar_pilotos").validate(
  //     {
  //       ignore: [],
  //       rules:
  //       {
  //         nom_pilotos:
  //         {
  //           required: true,
  //           letteronly: true,
  //         },
  //         ap_pilotos:
  //         {
  //           required: true,
  //           letteronly: true,
  //         },
  //         am_pilotos:
  //         {
  //           required: true,
  //           letteronly: true,
  //         },
  //         dia_pilotos:
  //         {
  //           required: true,
  //           numonly: true,
  //         },
  //         mes_pilotos:
  //         {
  //           required: true,
  //           numonly: true,
  //         },
  //         ano_pilotos:
  //         {
  //           required: true,
  //           numonly: true,
  //         },
  //         curp_pilotos:
  //         {
  //           required: true,
  //           letteronly: true,
  //         },
  //         telefono_movil_pilotos:
  //         {
  //           required: true,
  //           numonly: true,
  //         },
  //         direccion_pilotos:
  //         {
  //           required: true,
  //           letteronly: true,
  //         },
  //       },
  //       messages:
  //       {
  //         nom_pilotos:
  //         {
  //           required: "ingresa el nombre",
  //         },
  //         ap_pilotos:
  //         {
  //           required: "ingresa el apellido paterno",
  //         },
  //         am_pilotos:
  //         {
  //           required: "ingresa el apellido materno",
  //         },
  //         dia_pilotos:
  //         {
  //           required: "ingresa el dia de nacimiento",
  //         },
  //         mes_pilotos:
  //         {
  //           required: "ingresa el mes de nacimiento",
  //         },
  //         ano_pilotos:
  //         {
  //           required: "ingresa el año de nacimiento",

  //         },
  //         curp_pilotos:
  //         {
  //           required: "ingresa el curp",
  //         },
  //         telefono_movil_pilotos:
  //         {
  //           required: "ingresa un numero telefonico",
  //         },
  //         direccion_pilotos:
  //         {
  //           required: "ingresa la direccion",

  //         },
  //       },

  //         errorElement:'div',
  //           errorPlacement:function(error,element)
  //           {
  //             var placement=$(element).data("error");
  //             if(placement)
  //                 $(placement).append(error);
  //               else
  //                 error.insertAfter(element);
  //           },

  //     });

  //   $("#btn_aceptar_maletero").click(function(event)
  //   {
  //     $(".form_agregar_maleteros").submit();
  //   });
  //   $(".form_agregar_maleteros").validate(
  //     {
  //       ignore: [],
  //       rules:
  //       {
  //         nom_maletero:
  //         {
  //           required: true,
  //           letteronly: true,
  //         },
  //         ap_maletero:
  //         {
  //           required: true,
  //           letteronly: true,
  //         },
  //         am_maletero:
  //         {
  //           required: true,
  //           letteronly: true,
  //         },
  //         dia_maletero:
  //         {
  //           required: true,
  //           numonly: true,
  //         },
  //         mes_maletero:
  //         {
  //           required: true,
  //           numonly: true,
  //         },
  //         ano_maletero:
  //         {
  //           required: true,
  //           numonly: true,
  //         },
  //         curp_maletero:
  //         {
  //           required: true,
  //           letteronly: true,
  //         },
  //         telefono_movil_maletero:
  //         {
  //           required: true,
  //           numonly: true,
  //         },
  //         direccion_maletero:
  //         {
  //           required: true,
  //           letteronly: true,
  //         },
  //       },
  //       messages:
  //       {
  //         nom_maletero:
  //         {
  //           required: "ingresa el nombre",
  //         },
  //         ap_maletero:
  //         {
  //           required: "ingresa el apellido paterno",
  //         },
  //         am_maletero:
  //         {
  //           required: "ingresa el apellido materno",
  //         },
  //         dia_maletero:
  //         {
  //           required: "ingresa el dia de nacimiento",
  //         },
  //         mes_maletero:
  //         {
  //           required: "ingresa el mes de nacimiento",
  //         },
  //         ano_maletero:
  //         {
  //           required: "ingresa el año de nacimiento",

  //         },
  //         curp_maletero:
  //         {
  //           required: "ingresa el curp",
  //         },
  //         telefono_movil_maletero:
  //         {
  //           required: "ingresa un numero telefonico",
  //         },
  //         direccion_maletero:
  //         {
  //           required: "ingresa la direccion",

  //         },
  //       },

  //         errorElement:'div',
  //           errorPlacement:function(error,element)
  //           {
  //             var placement=$(element).data("error");
  //             if(placement)
  //                 $(placement).append(error);
  //               else
  //                 error.insertAfter(element);
  //           },

  //     });

  //   $("#btn_aceptar_seguridad").click(function(event)
  //   {
  //     $(".form_agregar_seguridad").submit();
  //   });
  //   $(".form_agregar_seguridad").validate(
  //     {
  //       ignore: [],
  //       rules:
  //       {
  //         nom_seguridad:
  //         {
  //           required: true,
  //           letteronly: true,
  //         },
  //         ap_seguridad:
  //         {
  //           required: true,
  //           letteronly: true,
  //         },
  //         am_seguridad:
  //         {
  //           required: true,
  //           letteronly: true,
  //         },
  //         dia_seguridad:
  //         {
  //           required: true,
  //           numonly: true,
  //         },
  //         mes_seguridad:
  //         {
  //           required: true,
  //           numonly: true,
  //         },
  //         ano_seguridad:
  //         {
  //           required: true,
  //           numonly: true,
  //         },
  //         curp_seguridad:
  //         {
  //           required: true,
  //           letteronly: true,
  //         },
  //         telefono_movil_seguridad:
  //         {
  //           required: true,
  //           numonly: true,
  //         },
  //         direccion_seguridad:
  //         {
  //           required: true,
  //           letteronly: true,
  //         },
  //       },
  //       messages:
  //       {
  //         nom_seguridad:
  //         {
  //           required: "ingresa el nombre",
  //         },
  //         ap_seguridad:
  //         {
  //           required: "ingresa el apellido paterno",
  //         },
  //         am_seguridad:
  //         {
  //           required: "ingresa el apellido materno",
  //         },
  //         dia_seguridad:
  //         {
  //           required: "ingresa el dia de nacimiento",
  //         },
  //         mes_seguridad:
  //         {
  //           required: "ingresa el mes de nacimiento",
  //         },
  //         ano_seguridad:
  //         {
  //           required: "ingresa el año de nacimiento",

  //         },
  //         curp_seguridad:
  //         {
  //           required: "ingresa el curp",
  //         },
  //         telefono_movil_seguridad:
  //         {
  //           required: "ingresa un numero telefonico",
  //         },
  //         direccion_seguridad:
  //         {
  //           required: "ingresa la direccion",

  //         },
  //       },

  //         errorElement:'div',
  //           errorPlacement:function(error,element)
  //           {
  //             var placement=$(element).data("error");
  //             if(placement)
  //                 $(placement).append(error);
  //               else
  //                 error.insertAfter(element);
  //           },

  //     });

  //     jQuery.validator.addMethod('letteronly',function(value,element){
  //       return this.optional(element)||/^[a-z ""]+$/i.test(value);
  //     },"este campo solo debe contener letras");
  //     jQuery.validator.addMethod('numonly',function(value,element)
  //     {
  //       return this.optional(element)||/^[0,1,2,3,4,5,6,7,8,9 ""]+$/i.test(value);
  //     },"este campo solo debe contener numeros");
    
  // });
 </script>
 <main style="">
     <div class="row col s12 white" style="width: 100%;">
      <div class="col s12">
            <ul class="tabs center">
              
              <li class="tab col l3 m4 s12"><a class="indigo-text" id="id_registrar" class="" href="#test2">Registrar Personal </a></li>
              <li class="tab col l3 m4 s12"><a class="indigo-text" id="id_ver" class="" href="#test3"> Ver Personal</a></li>

            </ul>
       

            <div class="input-field col s12"id="">
      <select>
      <option value="" disabled selected>Sleccione una opcion </option>
      <option value="1">Pilotos</option>
      <option value="2">Azafatas</option>
      <option value="3">Maleteros</option>
      <option value="4">Limpieza</option>
      <option value="5">Mantenimiento</option>
      <option value="6">Seguridad</option>

    </select>
    <label></label>
  </div>
      

      <table >
        <thead>
          <tr>
              <th data-field="id">Nombre</th>
              <th data-field="name"> Apellido Paterno</th>
              <th data-field="price">Apellido Materno</th>
              <th data-field="price">Puesto</th>
              <th data-field="price">Pago/th>


          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Alvin</td>
            <td>Eclair</td>
            <td>Etero</td>
            <td>Piloto</td>

            <td>$2000.00</td>
          </tr>
          <tr>
            <td>Alan</td>
            <td>Jellybean</td>
            <td>Jellybean</td>
            <td>Piloto</td>
            <td>$2000.00</td>
          </tr>
          <tr>
            <td>Jonathan</td>
            <td>Lollipop</td>
            <td>Cruz</td>
            <td>Piloto</td>
            <td>$2000.00`</td>
          </tr>
        </tbody>
      </table>
            



    </main>
    <script type="text/javascript">
      $(document).ready(function() {
        $('select').material_select();
          });
    </script>
          
            
          </main>
		<style type="text/css">
			.hover_menus
			{
				color: black;

			}
			.hover_menus:hover
			{
				
				color: blue;
				

			}
		</style>
		<?php
  include("../partials/footer.php")
?>
	</body>
</html>

