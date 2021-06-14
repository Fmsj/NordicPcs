        <?php
          if(count($computadoras)==0){
             
		?>
          <h1>No hay coincidencias</h1>
		<?php
		   }    
		?>
			<div class="container">
				<div class="row">
					<?php
						foreach($computadoras as $compu)
						{
					?>	
						<div class="col-sm">
							<div class="card text-dark bg-light my-2" style="width: 18rem;">
								<img src="<?= $compu['imagen'] ?>" class="card-img-top" width="300" height="300">
								<div class="card-body">
									<h5 class="card-title"><?= $compu['nombre'] ?></h5>
									<p class="card-text"><?= '$' . $compu['precio'] ?></p>
									<center>
									<a href="/Pc.php?j=<?= $compu['id'] ?>" class="btn btn-outline-primary"><img src="images/menu.png" /></a>
									<a type="button" class="btn btn-outline-danger" href="http://example.com/eliminar.php?id=<?= $compu['id'] ?>"><img src="images/eliminar.png" /></a> 
									<a type="button" class="btn btn-outline-success" href="http://example.com/editarproducto.php?id=<?= $compu['id'] ?>"><img src="images/editar.png" /></a>    
									</center>
								</div>
							</div>
						</div>	
					<?php
						}
					?>
				</div>
			</div>			
	    </body>
    </html>      	

