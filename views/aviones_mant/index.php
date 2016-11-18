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
        $("#id_aviones").click(function(event)
        {
          document.getElementById('div_aviones').style.display='none';
          document.getElementById('tab_aviones').style.display='none';
          document.getElementById('menu_independiente_aviones').style.display='block';
          document.getElementById('div_mantenimiento').style.display='none';
          document.getElementById('tab_mantenimiento').style.display='none';
          document.getElementById('menu_independiente_mantenimiento').style.display='none';
          document.getElementById('div_material').style.display='none';
          document.getElementById('tab_material').style.display='none';
          document.getElementById('menu_independiente_material').style.display='none';
          document.getElementById('div_informe').style.display='none';
          document.getElementById('tab_informe').style.display='none';
          document.getElementById('menu_independiente_informe').style.display='none';

        });
        $("#btn_agregar_aviones").click(function(event)
          {
            document.getElementById('div_aviones').style.display='block';
            document.getElementById('menu_independiente_aviones').style.display='none';
          });
        $("#btn_mostrar_aviones").click(function(event)
          {
            document.getElementById('tab_aviones').style.display='block';
            document.getElementById('menu_independiente_aviones').style.display='none';
          });
         $("#id_mantenimiento").click(function(event)
        {
          document.getElementById('div_aviones').style.display='none';
          document.getElementById('tab_aviones').style.display='none';
          document.getElementById('menu_independiente_aviones').style.display='none';
          document.getElementById('div_mantenimiento').style.display='none';
          document.getElementById('tab_mantenimiento').style.display='none';
          document.getElementById('menu_independiente_mantenimiento').style.display='block';
          document.getElementById('div_material').style.display='none';
          document.getElementById('tab_material').style.display='none';
          document.getElementById('menu_independiente_material').style.display='none';
          document.getElementById('div_informe').style.display='none';
          document.getElementById('tab_informe').style.display='none';
          document.getElementById('menu_independiente_informe').style.display='none';

        });
        $("#btn_agregar_mantenimiento").click(function(event)
          {
            document.getElementById('div_mantenimiento').style.display='block';
            document.getElementById('menu_independiente_mantenimiento').style.display='none';
          });
        $("#btn_mostrar_mantenimiento").click(function(event)
          {
            document.getElementById('tab_mantenimiento').style.display='block';
            document.getElementById('menu_independiente_mantenimiento').style.display='none';
          });
         $("#id_material").click(function(event)
        {
          document.getElementById('div_aviones').style.display='none';
          document.getElementById('tab_aviones').style.display='none';
          document.getElementById('menu_independiente_aviones').style.display='none';
          document.getElementById('div_mantenimiento').style.display='none';
          document.getElementById('tab_mantenimiento').style.display='none';
          document.getElementById('menu_independiente_mantenimiento').style.display='none';
          document.getElementById('div_material').style.display='none';
          document.getElementById('tab_material').style.display='none';
          document.getElementById('menu_independiente_material').style.display='block';
          document.getElementById('div_informe').style.display='none';
          document.getElementById('tab_informe').style.display='none';
          document.getElementById('menu_independiente_informe').style.display='none';

        });
        $("#btn_agregar_material").click(function(event)
          {
            document.getElementById('div_material').style.display='block';
            document.getElementById('menu_independiente_material').style.display='none';
          });
        $("#btn_mostrar_material").click(function(event)
          {
            document.getElementById('tab_material').style.display='block';
            document.getElementById('menu_independiente_material').style.display='none';
          });
        $("#id_informe").click(function(event)
        {
          document.getElementById('div_aviones').style.display='none';
          document.getElementById('tab_aviones').style.display='none';
          document.getElementById('menu_independiente_aviones').style.display='none';
          document.getElementById('div_mantenimiento').style.display='none';
          document.getElementById('tab_mantenimiento').style.display='none';
          document.getElementById('menu_independiente_mantenimiento').style.display='none';
          document.getElementById('div_material').style.display='none';
          document.getElementById('tab_material').style.display='none';
          document.getElementById('menu_independiente_material').style.display='none';
          document.getElementById('div_informe').style.display='none';
          document.getElementById('tab_informe').style.display='none';
          document.getElementById('menu_independiente_informe').style.display='block';

        });
        $("#btn_agregar_informe").click(function(event)
          {
            document.getElementById('div_informe').style.display='block';
            document.getElementById('menu_independiente_informe').style.display='none';
          });
        $("#btn_mostrar_informe").click(function(event)
          {
            document.getElementById('tab_informe').style.display='block';
            document.getElementById('menu_independiente_informe').style.display='none';
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
    $('select').material_select();
        $("#acepta_registro").click(function(event)
        {
            $("#form_mantenimiento").submit();
        });

        $("#form_mantenimiento").validate({
        ignore:[],
        rules:{
          trabajador:"required",
          pieza:"required",
          descripcion:"required",
          cantidad:"required",
          costo:
          {
            required:true,
            number:true
          },
        },
        messages:{
          trabajador:"Ingresa nombre del Mecanico",
          pieza:"Ingresa el nombre de la pieza",
          descripcion:"Ingresa una breve descripcion",
          cantidad:"Selecciona cantidad de pieza",
          costo:
          {
            required:"Ingresa el costo total de reparacion",
            number:"Ingresa solamente numeros",
          },
        },

        errorElement:'div',
        errorPlacement:function(error,element){
          var placement=$(element).data("error");
          if(placement)
            $(placement).append(error);
          else
            error.insertAfter(element);
        },
        submitHandler:function(form){
          alert("todo ok");
          $("#mantenimiento").closeModal();
        }
      });
        $("#acepmaterial").click(function(event)
        {
          $("#form_material").submit();
        });
        $("#form_material").validate(
        {
          ignore:[],
          rules:{
          material:"required",
          descrimater:"required",
          cantidadmate:
          {
            required:true,
            number:true
          },
          tipom:"required",
          descritipom:"required",
          costomate:
          {
            required:true,
            number:true
          },
        },
        messages:{
          material:"Ingresa nombre del Mecanico",
          descrimater:"Ingresa el nombre de la pieza",
          cantidadmate:
          {
            required:"Ingresa una breve descripcion",
            number:"Solamente Numeros"
          },
          tipom:"Selecciona cantidad de pieza",
          descritipom:"Ingresa una breve descripcion del tipo de la pieza",
          costomate:
          {
            required:"Ingresa el costo de la pieza",
            number:"Ingresa solamente numeros"
          },
        },

        errorElement:'div',
        errorPlacement:function(error,element){
          var placement=$(element).data("error");
          if(placement)
            $(placement).append(error);
          else
            error.insertAfter(element);
        },
        submitHandler:function(form){
          // alert("todo ok");
          // $("#mantenimiento").closeModal();
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
              <li class="tab col l3 m4 s12"><a class="indigo-text" id="id_material" class="id_material" href="#test4">MATERIAL</a></li>
              <li class="tab col l3 m4 s12"><a class="indigo-text" id="id_informe" class="id_informe" href="#test3">INFORME</a></li>
            </ul>
       </div><br>
       <div class="col s2 offset -s2" id="menu_independiente_aviones"  class="menu_independiente_aviones" style="display: none; margin-left: 4%;">
        <p id="btn_mostrar_aviones"><a href="#" class="hover_menus">Ver Aviones</a></p>
        <p id="btn_agregar_aviones"><a href="#" class="hover_menus">Agregar Aviones</a> </p>
       </div>
        <div class="col s2 offset -s2" id="menu_independiente_mantenimiento"  class="menu_independiente_mantenimiento" style="display: none; margin-left: 30%;">
        <p id="btn_mostrar_mantenimiento"><a href="#" class="hover_menus">Ver Mantenimiento</a></p>
        <p id="btn_agregar_mantenimiento"><a href="#" class="hover_menus">Agregar Mantenimiento</a></p>
       </div>
        <div class="col s2 offset -s2" id="menu_independiente_material"  class="menu_independiente_material" style="display: none; margin-left: 55%;">
        <p id="btn_mostrar_material"><a href="#" class="hover_menus">Ver Material</a></p>
        <p id="btn_agregar_material"><a href="#" class="hover_menus">Agregar Material</a> </p>
       </div>
       <div class="col s2 offset -s2" id="menu_independiente_informe"  class="menu_independiente_informe" style="display: none; margin-left: 80%;">
        <p id="btn_mostrar_informe"><a href="#" class="hover_menus">Ver Informe</a></p>
        <p id="btn_agregar_informe"><a href="#" class="hover_menus">Agregar Informe</a> </p>
       </div>
      </div> 
      
      <br>
      <br>

<div  id="div_aviones" class="div_aviones" style="display: none;">
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
 </div>
 <div id="tab_aviones" class="tab_aviones" style="display: none;">
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
<div id="div_mantenimiento" class="div_mantenimiento" style="display: none;">
  <div class="row">
        <div class="col l7 m6 s12">
        <h5 align="center">Mantenimiento</h5>
        <br>
          <div class="container row">
                <form id="form_mantenimiento" name="form_mantenimiento">
                <div class="input-field">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="trabajador" type="text" name="trabajador" data-error=".errortrabajador">
                        <label for="trabajador">Nombre Del Mecanico</label><br>
                        <div class="errortrabajador red-text"></div>
              
                </div>
                 <div class="input-field">
                        <i class="material-icons prefix">settings</i>
                        <input id="pieza" type="text" name="pieza" data-error=".errorpieza">
                        <label for="pieza">Nombre De La Pieza</label><br>
                        <div class="errorpieza red-text"></div>
                </div>
                <div class="input-field">
                        <i class="material-icons prefix">assignment</i>
                        <textarea id="descripcion" name="descripcion" class="validate" data-error=".errordescripcion" class="materialize-textarea" rows="10" placeholder="Breve Descripcion De La Pieza"></textarea>
                        <label for="descripcion"><b>Descripcion De La Pieza</b></label>
                        <div class="errordescripcion red-text"></div>
              
              
                    </div>
                <div class="input-field">
                        <i class="material-icons prefix">loupe</i>
                        <select name="cantidad" id="cantidad" data-error=".errorcantidad">
                                <option value="" disabled selected>Cantidad De Piezas</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="6">7</option>
                                <option value="6">8</option>
                                <option value="6">9</option>

                        </select>
                                
                                    <div class="errorcantidad red-text"></div>
                    </div>
                    <div class="input-field">
                        <i class="material-icons prefix">attach_money</i>
                        <input id="costo" type="text" name="costo" data-error=".errorcosto">
                        <label for="costo">Costo Total</label><br>
                        <div class="errorcosto red-text"></div>
                    </div>
                     <div class="col l6">
                    <a class="waves-effect waves-light hover_rojo btn right">Cancelar</a>
                  </div>
                    <div class="col l6">
                      <a class="waves-effect waves-light hover_verde darken-3 btn  right" id="acepta_registro">Aceptar</a>
                    </div>
                     </form>
             </div>
        </div> 
  </div>
</div>
<div id="tab_mantenimiento" class="tab_mantenimiento" style="display: none;">
  <div class="col l5 m6 s12">
          <h5 align="center">Mantenimiento Registrado</h5><br>
      <table class="responsive-table">
        <thead>
          <tr>
              <th data-field="id">No.</th>
              <th data-field="name">Nombre</th>
              <th data-field="price">Cantidad</th>
              <th data-field="price">Costo</th>

          </tr>
        </thead>

        <tbody>
          <tr>
            <td>11</td>
            <td>Eclair</td>
            <td>2</td>
            <td>$0.87</td>
          </tr>
          <tr>
            <td>22</td>
            <td>Jellybean</td>
            <td>3</td>
            <td>$3.76</td>
          </tr>
          <tr>
            <td>333</td>
            <td>Lollipop</td>
            <td>9</td>
            <td>$7.00</td>
          </tr>
        </tbody>
        <!-- <a href="#!" class="secondary-content"><i class="material-icons">send</i></a> -->
      </table>
     </div>
</div>
<div id="div_material" class="div_material" style="display: none;">
  <div class="row">
      <div class="col l7 m6 s12">
       <h5 align="center">Material</h5>
        <br>
       <div class="container row">
         <form id="form_material">
           <div class="input-field">
                        <i class="material-icons prefix">settings</i>
                        <input id="material" type="text" name="material" data-error=".errormaterial">
                        <label for="material">Nombre Del Material</label><br>
                        <div class="errormaterial red-text"></div>
              
                </div>
                 <div class="input-field">
                        <i class="material-icons prefix">assignment</i>
                        <input id="descrimater" type="text" name="descrimater" data-error=".errordescrimater">
                        <label for="descrimater">Descripcion De La Pieza</label><br>
                        <div class="errordescrimater red-text"></div>
                </div>
                 <div class="input-field">
                        <i class="material-icons prefix">loupe</i>
                        <input id="cantidadmate" type="text" name="cantidadmate" data-error=".errorcantidadmate">
                        <label for="cantidadmate">Cantidad De La Pieza</label><br>
                        <div class="errorcantidadmate red-text"></div>
                </div>
                 <div class="input-field">
                        <i class="material-icons prefix">brightness_low</i>
                        <select name="tipom" id="tipom" data-error=".errortipom">
                                <option value="" disabled selected>Tipo De Pieza</option>
                                <option value="1">Electrica</option>
                                <option value="2">Mecanica</option>
                                <option value="3">Electronica</option>
                                <option value="4">Fisica</option>
                        </select>
                        <div class="errortipom red-text"></div>
                 </div>
                 <div class="input-field">
                        <i class="material-icons prefix">assignment</i>
                        <input id="descritipom" type="text" name="descritipom" data-error=".errordescritipom">
                        <label for="descritipom">Descripcion Del Tipo de la Pieza</label><br>
                        <div class="errordescritipom red-text"></div>
                </div>
                <div class="input-field">
                       <i class="material-icons prefix">attach_money</i>
                        <input id="costomate" type="text" name="costomate" data-error=".errorcostomate">
                        <label for="costomate">Costo De La Pieza</label><br>
                        <div class="errorcostomate red-text"></div>
                </div>
                <div class="col l6">
                    <a class="waves-effect waves-light btn hover_rojo right">Cancelar</a>
                  </div>
                 <div class="col l6">
                   <a class="waves-effect waves-light btn hover_verde darken-3 right" id="acepmaterial">Aceptar</a>
                 </div>
         </form>
       </div>
     </div>
     
     </div>
</div>
<div id="tab_material" class="tab_material" style="display: none;">
  <div class="col l5 m6 s12">
     <h5 align="center">Material Almacenado</h5><br>
      <table class="responsive-table">
        <thead>
          <tr>
              <th data-field="id">No.</th>
              <th data-field="name">Nombre</th>
              <th data-field="price">Cantidad</th>
              <th data-field="price">Costo</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>11</td>
            <td>Eclair</td>
            <td>2</td>
            <td>$0.87</td>
          </tr>
          <tr>
            <td>22</td>
            <td>Jellybean</td>
            <td>3</td>
            <td>$3.76</td>
          </tr>
          <tr>
            <td>333</td>
            <td>Lollipop</td>
            <td>9</td>
            <td>$7.00</td>
          </tr>
        </tbody>
      </table>
     </div>
</div>
<div id="div_informe" class="div_informe" style="display: none;">
  <div class="row">
    
  </div>
</div>
  <div id="tab_informe" class="tab_informe" style="display: none;">
  <div class="col l5 m6 s12">
     <h5 align="center">Informes</h5><br>
      <table class="responsive-table">
        <thead>
          <tr>
              <th data-field="id">No.</th>
              <th data-field="name">Nombre</th>
              <th data-field="price">Cantidad</th>
              <th data-field="price">Costo</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>11</td>
            <td>Eclair</td>
            <td>2</td>
            <td>$0.87</td>
          </tr>
          <tr>
            <td>22</td>
            <td>Jellybean</td>
            <td>3</td>
            <td>$3.76</td>
          </tr>
          <tr>
            <td>333</td>
            <td>Lollipop</td>
            <td>9</td>
            <td>$7.00</td>
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
