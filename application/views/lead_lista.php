    	<div class="row">
            <div class="col-xs-2">
                <h2>Leads</h2>
            </div>
            <div class="col-md-2 col-md-offset-8">
                 <button class="btn btn-primary" data-toggle="modal" data-target=".lead_crear">Añadir <span class="glyphicon glyphicon-plus"></span></button>         
            </div>      
    	
    		<table id="lead_tabla"class="display table table-striped table-hover table-condensed table-responsive">
    			<thead>
    				<th>Nombre</th>
    				<th>Industria</th>
    				<th>Contacto</th>
                    <th>Edicion</th>
                    <th>Eliminacion</th>
    				
    			</thead>
    			<tr>
    				<td>Bodegas Puebla</td>
    				<td>Comercio Abarrotes</td>
    				<td><button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-md">Juan Perez</button></td>
    				<th><center><button type="button" class="btn btn-info">Editar</button></center></th>
    				<th><center><button type="button" class="btn btn-danger">Eliminar</button></center></th>
    			</tr>
    			 <tr>
                    <td>Bodegas Puebla</td>
                    <td>Comercio Abarrotes</td>
                    <td><button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-md">Juan Perez</button></td>
                    <th><center><button type="button" class="btn btn-info">Editar</button></center></th>
                    <th><center><button type="button" class="btn btn-danger">Eliminar</button></center></th>
                </tr>
                <tr>
                    <td>Bodegas Puebla</td>
                    <td>Comercio Abarrotes</td>
                    <td><button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-md">Juan Perez</button></td>
                    <th><center><button type="button" class="btn btn-info">Editar</button></center></th>
                    <th><center><button type="button" class="btn btn-danger">Eliminar</button></center></th>
                </tr>
    		</table>
    	</div>


    <div class="modal fade bs-example-modal-md" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <?php $this->load->view("contacto_detalle"); ?>
    </div>


    <div class="modal fade lead_crear" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <?php $this->load->view("lead_crear"); ?>
    </div>