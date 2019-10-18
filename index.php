<?php
include 'public/header.php';
?>
<br>
<h1>Buscar Pokemones</h1>
<br>
<form class="form-inline" method="post" action="modelo_busqueda.php">
  <div class="form-group">
    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del Pokemon">
  </div>
      <div class="form-group">
        <br>
        <button type="submit" name="buscar" id="buscar" class="btn btn-primary boton-busqueda">Buscar</button>
      </div>
</form>


<?php include 'public/footer.php'; ?>
