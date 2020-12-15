<?php  
$con=ConectaBD();
include("../conexion/conexion.php")
?>
<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<title></title>


<body>
</html>

<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php 
$consulta="SELECT idContacto,nombre,correo FROM contacto";
$query=mysqli_query($con,$consulta);
?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre completo</th>
      <th scope="col">correo electronico</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <?php 
while($fila=mysqli_fetch_array($query)){
?>

<tbody>
<tr> 
<td scope="row"><?php echo $fila['idContacto']?></th>
<td><?php echo $fila['nombrecompleto']?></td>
<td><?php echo $fila['correo']?></td>
<td>@mdo</td>
<td>
  <a href=""><img src="imagenes/lapiz.png" title="Editar"></a>
  <a href="index.php?idContacto=<?php echo $fila['nombrecompleto']?>&accion=borrar"><img src="imagenes/basura.png" title="Eliminar"></a>
</td>
</tr> 
</tbody>
<?php }?>
</table>
</table>
</head>
</html>
</body>



 