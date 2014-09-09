
    <!-- Data table dependencias -->
    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/jquery.dataTables.css">   
    <!-- DataTables -->
    <script type="text/javascript" charset="utf8" src="<?php echo base_url();?>assets/js/jquery.dataTables.js"></script>

    <style type="text/css">
            p.test { 
            white-space:nowrap; 
            width:12em; 
            overflow:hidden; 
            text-overflow: ellipsis; 
            /*otras hornamentales*/ 
        } 
    </style>
    <script type="text/javascript">
        $(document).ready( function () {
            $('#citas_tabla').DataTable();
            $('#oportunidad_tabla' ).DataTable();
            $('#lead_tabla').DataTable();
        }   );
    </script>

    <div class="container">
    	<div class="row">
    		<h2>Citas Proximas</h2>
    		<table  id="citas_tabla" class="display table  table-striped table-hover table-strech table-condensed table-responsive">
    			<thead>
    				<th>Titulo</th>
    				<th>Fecha</th>
    				<th>Descripcion</th>
    				<th>Edicion</th>
                    <th>Eliminacion</th>
    			</thead>
    			<tr>
    				<td>Presentacion St sistems</td>
    				<td>12-08-15</td>
    				<td><p class="test">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></td>
    				<th><center><button type="button" class="btn btn-info">Editar</button></center></th>
    				<th><center><button type="button" class="btn btn-danger">Eliminar</button></center></th>
    			</tr>
                    <tr>
                    <td>Presentacion St sistems</td>
                    <td>12-08-15</td>
                    <td><p class="test">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></td>
                    <th><center><button type="button" class="btn btn-info">Editar</button></center></th>
                    <th><center><button type="button" class="btn btn-danger">Eliminar</button></center></th>
                </tr>
                    <tr>
                    <td>Presentacion St sistems</td>
                    <td>12-08-15</td>
                    <td><p class="test">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></td>
                    <th><center><button type="button" class="btn btn-info">Editar</button></center></th>
                    <th><center><button type="button" class="btn btn-danger">Eliminar</button></center></th>
                </tr>
    		</table>
    	</div>
    	<div class="row">
    		<h2>Oportunidades Mas Recientes</h2>
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
    	<div class="row">
    		<h2>Ultimos Leads</h2>
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

        <!-- Large modal -->
        
    </div>			
    	
    <div class="modal fade bs-example-modal-md" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <?php $this->load->view("contacto_detalle"); ?>
    </div>
    <!-- Data table dependencias -->
    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/jquery.dataTables.css">   
    <!-- DataTables -->
    <script type="text/javascript" charset="utf8" src="<?php echo base_url();?>assets/js/jquery.dataTables.js"></script>


