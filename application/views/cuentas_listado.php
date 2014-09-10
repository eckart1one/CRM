<div class="row">

             <div class="col-xs-4">
                <h2>Oportunidades Mas Recientes</h2>
            </div>
            <div class="col-md-2 col-md-offset-6">
                 <button class="btn btn-primary" data-toggle="modal" data-target=".cuenta_crear">Añadir <span class="glyphicon glyphicon-plus"></span></button>         
            </div> 

    		
    		<table id="oportinidad_tabla" class="display table table-striped table-hover table-condensed table-responsive">
    			<thead>
    				<th>Titulo</th>
    				<th>Fecha Cierre</th>
    				<th>Estado</th>
    			    <th>Edicion</th>
                    <th>Eliminacion</th>
    			</thead>
    			<tr>
    				<td>Servicio Tecnico</td>
    				<td>15-02-15</td>
    				<td>Aprobación</td>
    			    <th><center><button type="button" class="btn btn-info">Editar</button></center></th>
    				<th><center><button type="button" class="btn btn-danger">Eliminar</button></center></th>
    			</tr>
    		    <tr>
                <td>Servicio Tecnico</td>
                    <td>15-02-15</td>
                    <td>Aprobación</td>
                    <th><center><button type="button" class="btn btn-info">Editar</button></center></th>
                    <th><center><button type="button" class="btn btn-danger">Eliminar</button></center></th>
                </tr>
                <tr>
                    <td>Servicio Tecnico</td>
                    <td>15-02-15</td>
                    <td>Aprobación</td>
                    <th><center><button type="button" class="btn btn-info">Editar</button></center></th>
                    <th><center><button type="button" class="btn btn-danger">Eliminar</button></center></th>
                </tr>
    		</table>
    	</div>


    <div class="modal fade cuenta_crear" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <?php $this->load->view("cuenta_crear"); ?>
    </div>