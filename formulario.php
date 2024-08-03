

<!DOCTYPE html>
<html>
<head>
    <title>Página Principal</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<body>
    <h1>AGREGAR NUEVO PRODUCTO</h1>
    //mandar por post registro de producto
    <form action="new_product.php" method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">Nombre del producto</label>
        <input type="TEXT" class="form-control" name="nombre" id="nombre" aria-describedby="emailHelp" placeholder="nombre" required>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Descripción del producto</label>
        <input type="TEXT" class="form-control" name="descripcion" id="descripcion" aria-describedby="emailHelp" placeholder="descripcion" required>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Precio del producto</label>
        <input type="precio" class="form-control" name="precio" id="precio" placeholder="precio" required>
    </div>
    <input type="submit" value="registrar producto" class="btn btn-primary btn-block mb-4">
</form>

    <a href="paginaprincipal.php">Atras</a>
</body>
</html>

