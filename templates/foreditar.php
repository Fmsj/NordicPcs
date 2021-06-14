<div class="container">
		<form method="post" action="http://example.com/modificar.php?id=<?= $compu['id'] ?>"> 
			<div class="mb-3">
				<label class="form-label">Nombre del producto</label>
				<input name="nombre" class="form-control form-control-lg" type="text" value="<?= $compu['nombre'] ?>" placeholder="Escribe el nombre del producto" aria-label=".form-control-lg example">
			</div>
			<div class="mb-3">
				<label class="form-label">Precio</label>
				<input name="precio" class="form-control form-control-lg" type="number" step="0.01" value="<?= $compu['precio'] ?>" placeholder="Precio del producto" aria-label="default input example">
			</div>
			<div class="mb-3">
				<label class="form-label">Procesador</label>
				<input name="procesador" class="form-control form-control-lg" type="text" value="<?= $compu['procesador'] ?>" placeholder="Escribe el procesador" aria-label=".form-control-lg example">
			</div>
			<div class="mb-3">
				<label class="form-label">Ram</label>
				<input name="ram" class="form-control form-control-lg" type="text" value="<?= $compu['ram'] ?>" placeholder="Escribe la ram" aria-label=".form-control-lg example">
			</div>
			<div class="mb-3">
				<label class="form-label">Stock</label>
				<input name="stock" class="form-control form-control-lg" type="number" value="<?= $compu['stock'] ?>" placeholder="Productos en existencia" aria-label="default input example">
			</div>
			<div class="mb-3">
				<label class="form-label">Ruta de imagen</label>
				<input name="imagen" class="form-control form-control-lg" type="text" value="<?= $compu['imagen'] ?>" placeholder="Ruta de imagen" aria-label="default input example">
			</div>
			<button type="submit" class="btn btn-primary">Modificar</button>
		</form>
	</div>	
  </body>
</html>
