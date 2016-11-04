<?php
  include("../partials/head.php")
?>
<main>
	<body>
		<div class="modal" id="modal_login">
              <div class="modal-content" >
                <h4>INFORMACION ADICIONAL</h4>
                <div class="container row">
                  <form id="form_login">
                  <div class="input-field col l4 m10 s12">
                    
                    <input type="text" id="nombre" name="nombre">
                    <label for="nombre">Salida</label>
                    
                  </div>
                  
                  <div class="input-field col l4 m10 s12">
                    <input type="text" id="destino" name="destino">
                    <label for="destino">Destino</label>
                    
                  </div>
                  <div class="input-field col l4 m10 s12">
                    <input type="text" id="horario" name="horario">
                    <label for="horario">horario</label>
                    
                  </div>
                  
                  </form>
                </div>

              </div>
              <div class="modal-footer">
                <a href="#" class="btn-flat waves-effect waves-light btn" id="acep_login">Aceptar</a>
                <a href="#" class="btn-flat waves-effect waves-light btn modal-close" id="cancelari">Cancelar</a>
              </div> 
      </div> 
	</body>
	  
     
     <nav id="uno" class="" role="navigation">

      	<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
        
        <ul class="right hide-on-med-and-down">
        
    
        
			 
           <li><a href="#"><i class="material-icons left"></i>Vuela</a></li>
           <li><a href="#"><i class="material-icons left"></i>Experiencia</a></li>
           <li><a href="#"><i class="material-icons left"></i>Destinos</a></li>
          

        </ul>

 	 </nav>
 	 <img width="2000" heigth="400" src="../../resources/img/a.jpg" class="responsive-img">
         <br>
           <div class="parallax-container">
      			<div class="parallax"><img src="../../resources/img/mapa.png" class="responsive-img"></div>
      			<a  class="btn-floating btn-large waves-effect waves-light red " id="btmostrar"><i class="material-icons">add</i>


      			</a>
      			<a  class="btn-floating btn-large waves-effect waves-light red " id="btmost"><i class="material-icons">add</i>


      			</a>
    </div>

  
<div class="container">
<div class="row">

<div class="col1 l20">
		
	

 	<div class="col l4 m3 s12offset-l0 ">
	<div class="card">
        <div id="cuno" class="card-image">
          <img id="cuno"  src="../../resources/img/premier.jpg">
          <b><span class="card-title">Clase Premier</span></b>
        </div>
        <div class="card-content">
            <p>Donde la exclusividad cobra un nuevo valor. </p>
            <a class="btn-floating btn-large waves-effect waves-light blue"><i class="material-icons">add</i></a
        </div>
    </div>
    </div>


</div></div>
<div class="col l4 m3 s12 offset-30 center">
	<div class="card ">
        <div id="cuno" class="card-image">
          <img id="cuno"  src="../../resources/img/turista.jpg">
          <b><span class="card-title ">Clase Turista</span></b>
        </div>
        <div class="card-content">
            <p>Cuidamos de tu comodidad al mejor precio</p>
        <a aling="center" class="btn-floating btn-large waves-effect waves-light blue center"><i class="material-icons">add</i></a>
        </div>
    </div>

		
    </div>
    <div class="col l4 m3 s12 offset-30 center">
 <div class="section aling=right">
  		<ul class="collapsible" data-collapsible="accordion">
		    <li>
		      <div class="collapsible-header"><i class="material-icons">work</i>Reserva</div>
		      <div class="collapsible-body" style=""><p>Lorem ipsum dolor sit amet.</p></div>
		    </li>
		    <li>
		      <div class="collapsible-header"><i class="material-icons">navigation</i>Monitoreo</div>
		      <div class="collapsible-body" style=""><p>Monitorea tu vuelo</p></div>
		    </li>
		    <li>
		      <div class="collapsible-header"><i class="material-icons">shopping_cart</i>Seguir Comprando</div>
		      <div class="collapsible-body" style=""><p>Lorem ipsum dolor sit amet.</p></div>
		    </li>
		</ul>
		</div>
</div>

</div>

</div>

 <div class="parallax-container">
      			<div class="parallax"><img src="../../resources/img/wifi.jpg" class="responsive-img"></div>
  

			<div class="caption center-align white-text">

                     <big <h3>
                     <br>
                     <br>
                     <br>
                      <br>
                     <br>
                     <br>
                     <br>A bordo y conectado</h3></big>
                      <h5 class="light white-text text-linghten-3"> </h5>
                    <big <label>¿Quién dijo que no había señal de internet en las nubes? <br></label></big>
    				<big <label>Mantente conectado con nuestra red de Wifi, incluso <br></label></big>
      				<big <label > durante tu vuelo.<pre></label></big>
                    </div>
                    
  
            </div>
            <!--<div input-field>
    <input type="text" ng-model="dummyInputs.inputFieldInput" length="150">
    <label>Input label</label>
</div>
<div input-field>
    <textarea ng-model="dummyInputs.textAreaInput" class="materialize-textarea"></textarea>
    <label>Textarea</label>
</div>-->
<<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
</main>





<script type="text/javascript">
          $(document).ready(function(){

           $("#btmostrar").click(function(event){
          $("#modal_login").openModal();
         

          });
             $("#btmost").click(function(event){
          $("#modal_login").openModal();
         

          });
          
            
       $("#acep_login").click(function(event){ 
       var nombre=$("#nombre").val();
       var destino=$("#destino").val();  
      var horario=$("#horario").val(); 
    

                  html+='<tr>';
                  html+='<td id="iden'+i+'">'+i+'</td>';
                  html+='<td id="nombre'+i+'">'+nombre+'</td>';
                  html+='<td id="destino'+i+'">'+destino+'</td>';
                  html+='<td id="horario'+i+'">'+horario+'</td>';
                  
                  html+='</tr>';
                
                  
                  
                  $("#modal_login").closeModal();
       });


             
            
              $(".slider").slider({
                tramsition:1500,interval:2000
              });
              $(".button-collapse").sideNav();
              $(document).ready(function(){
      $('.parallax').parallax();
    });
        
$(document).ready(function(){
$('select').material_select();
$('#dts_destin').click(function(event){
	$('#destin').openModal();
});


$('.gra').click(function(event){
$('#modal1').openModal();
 
  });
});
          });
      </script>

 <?php
  include("../partials/footer.php")
?>





