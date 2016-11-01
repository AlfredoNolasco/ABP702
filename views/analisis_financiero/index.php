<?php
  include("../partials/head.php")
?>

<main>
<div class="row">
	<div class="col s9" style="margin-top: 1.5%;">
	<div class="row">
    <div class="col s12">
      <ul class="tabs center">
        <li class="tab col l3 m4 s12"><a class="indigo-text" id="dts_generales" href="#test1">Reparaciones</a></li>
        <li class="tab col l3 m4 s12"><a class="indigo-text" id="#" href="#test2">Mantenimiento</a></li>
        <li class="tab col l3 m4 s12"><a class="indigo-text" id="#" href="#test3">Materiales</a></li>
        <li class="tab col l3 m4 s12"><a class="indigo-text" id="#" href="#test4">Pagos</a></li>
		<li class="tab col l3 m4 s12"><a class="indigo-text" id="#" href="#test5">Ganancias</a></li>
      </ul>
    </div>
    	<div id="test1" class="col s12">
    		<table>
		        <thead>
		          <tr>
		              <th data-field="id">No.</th>
		              <th data-field="name">Descripción</th>
		              <th data-field="price">Costo</th>
		          </tr>
		        </thead>

		        <tbody>
		          <tr>
		            <td>1</td>
		            <td>Reparacion de tren de aterrisaje</td>
		            <td>$15,000</td>
		          </tr>
		          <tr>
		            <td>2</td>
		            <td>Reparación de pantallas</td>
		            <td>$85,000</td>
		          </tr>
		          <tr>
		            <td>3</td>
		            <td>Reparación de asientos ejecutivos</td>
		            <td>$120,000</td>
		          </tr>
		          <tr>
		            <td>4</td>
		            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
		            <td>$20,000</td>
		          </tr>
		          <tr>
		            <td>5</td>
		            <td>Lorem Nesciunt dolor aliquam unde ione consectetur illum quisquam.</td>
		            <td>$35,850</td>
		          </tr>
		        </tbody>
      		</table>
      		<br><br>
      		<div class="row">
      		<div class="col s3 offset-s6">
      			<a class="waves-effect waves-light btn blue right">Generar grafica</a>
      		</div>
      		<div class="col s3">
      			<a class="waves-effect waves-light btn blue right">Imprimir reporte</a>
      		</div>
      		</div>
    	</div>
    	<div id="test2" class="col s12">
			<table>
		        <thead>
		          <tr>
		              <th data-field="id">No.</th>
		              <th data-field="name">Descripción</th>
		              <th data-field="price">Costo</th>
		          </tr>
		        </thead>

		        <tbody>
		          <tr>
		            <td>1</td>
		            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto repellat vel est ducimus illo, provident architecto tempora quas quae possimus eum odio, maxime minus minima temporibus sed magni, similique totam.</td>
		            <td>$15,000</td>
		          </tr>
		          <tr>
		            <td>2</td>
		            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos placeat soluta quod, veritatis ipsa molestiae error eius eveniet ipsam. Nihil blanditiis sed culpa error dolorum officia expedita iste illum ea!</td>
		            <td>$85,999</td>
		          </tr>
		          <tr>
		            <td>3</td>
		            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis illo necessitatibus cumque voluptatibus? Et, accusantium, temporibus! Consequatur laudantium inventore, nemo repellendus reiciendis unde id recusandae nihil. Amet velit ex totam.</td>
		            <td>$120,185</td>
		          </tr>
		          <tr>
		            <td>4</td>
		            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit blanditiis repudiandae, fugiat modi nihil, nemo natus enim sequi hic provident voluptas laudantium illo placeat autem. Sit, rem, totam. Autem, fugiat.</td>
		            <td>$20,150</td>
		          </tr>
		          <tr>
		            <td>5</td>
		            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius in cupiditate perspiciatis, vero quae sit quis rem inventore tenetur magnam dolore natus, enim cumque vel molestiae ad. Aperiam, odio laudantium.</td>
		            <td>$39,789</td>
		          </tr>
		          <tr>
		            <td>6</td>
		            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quo culpa nisi laboriosam non eos, sunt a impedit sequi dolorum. Pariatur, dolore eos deserunt soluta. Voluptates earum saepe tempore doloremque!</td>
		            <td>$250,000</td>
		          </tr>
		        </tbody>
      		</table>
      		<br><br>
      		<div class="row">
      		<div class="col s3 offset-s6">
      			<a class="waves-effect waves-light btn blue right">Generar grafica</a>
      		</div>
      		<div class="col s3">
      			<a class="waves-effect waves-light btn blue right">Imprimir reporte</a>
      		</div>
      		</div>
    	</div>
    	<div id="test3" class="col s12">
			<table>
		        <thead>
		          <tr>
		              <th data-field="id">No.</th>
		              <th data-field="name">Descripción</th>
		              <th data-field="price">Costo unitario</th>
					  <th data-field="price">Cantidad de productos</th>
					  <th data-field="price">Total</th>
		          </tr>
		        </thead>

		        <tbody>
		          <tr>
		            <td>1</td>
		            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto repellat vel est ducimus illo, provident architecto tempora quas quae possimus eum odio, maxime minus minima temporibus sed magni, similique totam.</td>
		            <td>$15,000</td>
		            <td>3</td>
		            <td>$45,000</td>
		          </tr>
		          <tr>
		            <td>2</td>
		            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos placeat soluta quod, veritatis ipsa molestiae error eius eveniet ipsam. Nihil blanditiis sed culpa error dolorum officia expedita iste illum ea!</td>
		            <td>$85,999</td>
		            <td>1</td>
		            <td>$85,999</td>
		          </tr>
		          <tr>
		            <td>3</td>
		            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis illo necessitatibus cumque voluptatibus? Et, accusantium, temporibus! Consequatur laudantium inventore, nemo repellendus reiciendis unde id recusandae nihil. Amet velit ex totam.</td>
		            <td>$100,000</td>
		            <td>2</td>
		            <td>$200,000</td>
		          </tr>
		          <tr>
		            <td>4</td>
		            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit blanditiis repudiandae, fugiat modi nihil, nemo natus enim sequi hic provident voluptas laudantium illo placeat autem. Sit, rem, totam. Autem, fugiat.</td>
		            <td>$20,150</td>
		            <td>5</td>
		            <td>$100,750</td>
		          </tr>
		          <tr>
		            <td>5</td>
		            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius in cupiditate perspiciatis, vero quae sit quis rem inventore tenetur magnam dolore natus, enim cumque vel molestiae ad. Aperiam, odio laudantium.</td>
		            <td>$39,789</td>
		            <td>1</td>
		            <td>$39,789</td>
		          </tr>
		          <tr>
		            <td>6</td>
		            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quo culpa nisi laboriosam non eos, sunt a impedit sequi dolorum. Pariatur, dolore eos deserunt soluta. Voluptates earum saepe tempore doloremque!</td>
		            <td>$250,000</td>
		            <td>4</td>
		            <td>$1,000,000</td>
		          </tr>
		        </tbody>
      		</table>
      		<br><br>
      		<div class="row">
      		<div class="col s3 offset-s9">
      			<a class="waves-effect waves-light btn blue right">Imprimir reporte</a>
      		</div>
      		</div>
    	</div>
  	</div>
  	</div>
  	<div class="col s3">
  	 	<div class="divider"></div>
		<div class="section center"> 
		    <h5 class="indigo-text">Documentos Recientes</h5>
		    <!-- <p>Ordenados por...</p> -->
		</div>
		<div class="divider"></div>
		<div class="section">
  		<ul class="collapsible" data-collapsible="accordion">
		    <li>
		      <div class="collapsible-header"><i class="material-icons">library_books</i>Año</div>
		      <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
		    </li>
		    <li>
		      <div class="collapsible-header"><i class="material-icons">assignment</i>Mes</div>
		      <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
		    </li>
		    <li>
		      <div class="collapsible-header"><i class="material-icons">mode_edit</i>Dia</div>
		      <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
		    </li>
		</ul>
		</div>
		<div class="divider"></div>
		<div class="section center">
			<img class="responsive-img" src="../../resources/img/calendar.png">
		</div>
		<!-- <div class="divider"></div> -->
		<!-- <div class="section center">
			<img class="responsive-img" src="../../resources/img/disfrutamexico.jpg">
		</div> -->
  	</div>
</div>
</main>

<?php
  include("../partials/footer.php")
?>