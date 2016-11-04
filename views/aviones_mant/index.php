<?php
  include("../partials/head.php")
?>
<script type="text/javascript">
	$(document).ready(function() 
	{
		$('select').material_select();
        $("#agregar").click(function()
        {
            $("#mantenimiento").openModal();
        });

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
        // Validar el material ingresado
        $("#agrmate").click(function()
        {
          $("#modmate").openModal();
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
<body>


	<div class="row">
		<div class="center">
			<h3 class="center">Servicio de Mantenimiento</h3>
             <a class=" btn-large waves-effect waves-light blue" id="agregar"><i class="material-icons">add</i>Nuevo Mantenimiento</a>
             <a class=" btn-large waves-effect waves-light blue" id="agrmate"><i class="material-icons">settings</i>Material</a>
		</div> 
	</div>



    <div class="modal" id="mantenimiento">
        <div class="modal-content">
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
                     </form>
             </div>
        
         <div class="modal-footer">
                <a href="#" class="btn-flat waves-effects wavs-light btn" id="acepta_registro">Aceptar</a>
                <a href="#" class="btn-flat waves-effects wavs-light btn  modal-close">Cancelar</a>
         </div>
      </div>
   </div>

   <!-- agregar herramientas o material   -->
   <div class="modal" id="modmate">
     <div class="modal-content">
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
         </form>
       </div>
     </div>
     <div class="modal-footer">
                <a href="#" class="btn-flat waves-effects wavs-light btn" id="acepmaterial">Aceptar</a>
                <a href="#" class="btn-flat waves-effects wavs-light btn  modal-close">Cancelar</a>
         </div>
   </div>

<div class="col l3 offset-l4">
<div class="row">
<div class="col s12 m4 offset-l4">
 <div class="card">
        <div class="card-image">
          <img src="../../resources/img/man.jpg">
          
        </div>
        <div class="card-content">
            <p class="center">Mantenimiento</p>
        </div>
      </div>
    </div>
    </div> 
    </div>   

    
</body>
<?php
  include("../partials/footer.php")
?>
