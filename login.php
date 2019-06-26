<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title></title>
    </head>
    <body class="bg-light">
        <div class="card mx-auto mt-5" style="width: 25rem;">
            <div class="card-body" class="container">
        <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Codigo</label>
    <input name="codigo"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa Codigo">
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Recordar mis Datos</label>
  </div>
            <button name="submit" type="submit" value="Ingresar" class="btn btn-dark btn-block">Ingresar</button>
</form>
       </div> </div>
        <?php
         session_start();
  if (isset($_SESSION['submit'])) {
    header('Location: /php-login');
  }
  require './bd/Conexion.php';
  if (!empty($_POST['codigo']) && !empty($_POST['password'])) {
    $ingreso = $conn->prepare('SELECT codigo,password FROM users WHERE codigo = :codigo');
    $ingreso->bindParam(':codigo', $_POST['codigo']);
    $ingreso->execute();
    $results = $ingreso->fetch(PDO::FETCH_ASSOC);
    $message = '';
    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['id'];
      header("Location: /php-login");
    } else {
      $message = 'Sus credenciales no coinciden';
    }
  }
        ?>
        <script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        </script>
    </body>
</html>
