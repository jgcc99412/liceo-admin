<center><h1>BUSCADOR</h1></center>



      <form class="form-horizontal" role="form" id="datos_cotizacion">
				
						<div class="form-group row">
							<label for="q" class="col-md-2 control-label"></label>
							<div class	="col-md-5">
								<input type="text" class="form-control" id="q" placeholder="Nombre o Cargo" onkeyup='load(1);'>
							</div>
							
							
							
							<div class="col-md-3">
								<button type="button" class="btn btn-default" onclick='load(1);'>
									<span class="glyphicon glyphicon-search" ></span> Buscar</button>
								<span id="loader"></span>
							</div>
							
						</div>
				
				
				
			</form>

			<div id="resultados"></div><!-- Carga los datos ajax -->
		    <div class='outer_div'></div><!-- Carga los datos ajax -->