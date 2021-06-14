<body>
          <center>  
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                        <img src="<?= $y['imagen'] ?>" class="card-img-top" alt="...">
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $y['nombre'] ?></h5>
                            <p class="card-text">Precio:<?= $y['precio'] ?></p>
                            <p class="card-text">Procesador: <?= $y['procesador'] ?></p>
                            <p class="card-text">RAM: <?= $y['ram'] ?></p>
                            <p class="card-text">Stock: <?= $y['stock'] ?></p>
                            <a type="button" class="btn btn-outline-danger" href="http://example.com/eliminar.php?id=<?= $y['id'] ?>"><img src="images/eliminar.png" /></a> 
                            <a type="button" class="btn btn-outline-success" href="http://example.com/editarproducto.php?id=<?= $y['id'] ?>"><img src="images/editar.png" /></a> 
                        </div>
                        </div>
                    </div>  
                 </div>
           </center> 
       </body>
    </html>