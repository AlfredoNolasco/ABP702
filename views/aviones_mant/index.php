<?php
  include("../partials/head.php")
?>
<body>
<script type="text/javascript">
  $(document).ready(function(event)
  {
        $('select').material_select();

        $("#btn_agregar").click(function()
        {
            $("#test1");
        });

    $("#acepta_registro").click(function(event)
    {
      $("#form_aviones").submit();
    });


    $("#form_aviones").validate({
        ignore:[],   
        rules:{
          nombre:"required",
          descripcion:"required",
          asiento:
          {
            required:true,
            number:true
          },
          combustible:
          {
            required:true,
            number:true
          },
          tipo:"required"
        },
        messages:{
          nombre:"Ingresa el modelo del avion",
          asiento:
          {
            required:"Ingresa numero de asientos",
            number:"Solamente numeros"
          },
          descripcion:"Ingresa una breve descripcion",
          combustible:
          {
            required:"Ingresa cantidad de combustible",
            number:"Ingresa numeros"
          },
          tipo:"Ingresa tipo de vuelo"
            
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
        submitHandler:function(form)
        {
            alert("todo ok");
          $("#modal_agregar").closeModal();
        }
         
    
  });
  });
 </script>

<main>
     <div class="row col s12 white" style="width: 100%;">
      <div class="col s12">
            <ul class="tabs center">
              <li class="tab col l3 m4 s12" id="id_aviones" class="id_aviones" ><a class="indigo-text" href="#test1" >AVIONES</a></li>
              <li class="tab col l3 m4 s12"><a class="indigo-text" id="id_mantenimiento" class="id_mantenimiento" href="#test2">MANTENIMIENTO</a></li>
              <li class="tab col l3 m4 s12"><a class="indigo-text" id="id_informe" class="id_informe" href="#test3">INFORME</a></li>
            </ul>
       </div>
      </div> 
      
      <br>
      <br>

<div id="test1">
<div class="row">
               <h5 align="left" class="col offset-l1">Aviones</h5>
                <br>
                <br>
                <form id="form_aviones" name="form_aviones">
                
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">airplanemode_active</i>
                        <input id="nombre" type="text" name="nombre" class="validate" data-error=".errornombre">
                        <label for="nombre">Nombre Del Avion</label><br>
                        <div class="errornombre red-text"></div>
              
                    </div>
                 </div>
                 
                 <div class="row">
                    <div class="input-field col s6 offset-l2">
                        <i class="material-icons prefix">airline_seat_recline_extra</i>
                        <input id="asiento" type="text" name="asiento" class="validate" data-error=".errorasiento">
                        <label for="asiento">Numero de Asientos</label><br>
                        <div class="errorasiento red-text"></div>
              
                    </div>
                </div>
                  
                  <div class="row"> 
                    <div class="input-field col s6 offset-l2">
                        <i class="material-icons prefix">assignment</i>
                        <textarea id="descripcion"  name="descripcion" class="validate" data-error=".errordescripcion" class="materialize-textarea" rows="10" placeholder="Breve Descripcion Del Avion"></textarea>
                        <label for="descripcion"><b>Descripcion Del Avion</b></label>
                        <div class="errordescripcion red-text"></div>
              
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s6 offset-l2">
                        <i class="material-icons prefix">local_gas_station</i>
                        <input id="combustible" type="text" name="combustible" class="validate" data-error=".errorcombustible">
                        <label for="combustible">Capacidad de tanque en litros</label><br>
                        <div class="errorcombustible red-text"></div>
              
                    </div>
                   </div>
                   
                   <div class="row"> 
                    <div class="input-field col s6 offset-l2">
                        <i class="material-icons prefix">equalizer</i>
                        <select name="tipo" id="tipo" class="validate" data-error=".errortipo">
                                <option value="" disabled selected>Tipo de vuelo</option>
                                <option value="1">Clase Alta</option>
                                <option value="2">Clase Baja</option>
                        </select>
                                <div class="errortipo red-text"></div>
                    </div>
                   </div> 
            </form>
</div>
       
  <div class="row">
        <div class="col s2 offset-l3">
                <a class="waves-effect waves-light hover_verde btn" id="acepta_registro">Aceptar</a>
        </div>
        <div class="col s1">
                <a href="#" class="waves-effect waves-light hover_rojo btn">Cancelar</a>
        </div>
  </div>
<br>
<br>
<br>
<br>
<div class="row">
<table class="col s10 offset-l1">
            <thead>
              <tr>
                  <th data-field="id">No.</th>
                  <th data-field="name">Nombre</th>
                  <th data-field="price">No.asientos</th>
                  <th data-field="name">Descripcion</th>
                  <th data-field="name">Capacidad</th>
                  <th data-field="name">Tipo de vuelo</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>1</td>
                <td>airplane</td>
                <td>200</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt magni velit, repudiandae odit soluta unde, deleniti minus illum! Beatae hic at rem, debitis numquam ex nisi maxime quas excepturi facilis.</td>
                <td>500 litros</td>
                <td>clase alta</td>
             </tr>
              <tr>
                <td>2</td>
                <td>airplane</td>
                <td>300</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores debitis, architecto. Corporis odio a exercitationem eos natus magnam reprehenderit, architecto soluta. Recusandae nemo obcaecati reprehenderit, cumque, tempora exercitationem dolore nostrum.</td>
                <td>600 litros</td>
                <td>clase baja</td>
              </tr>
              <tr>
                <td>3</td>
                <td>airplane</td>
                <td>500</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid eligendi asperiores rerum aperiam nam esse ratione aliquam quos alias nostrum qui laudantium, nobis dolore tempora iste incidunt quibusdam, quo mollitia.</td>
                <td>700 litros</td>
                <td>clase alta</td>
              </tr>
              
            </tbody>
          </table>
          </div>
 </div>


  
</main>
       
  </body>

<?php
  include("../partials/footer.php")
?>
