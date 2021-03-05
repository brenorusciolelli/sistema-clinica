<!DOCTYPE html>
<html lang="en">

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import bootstrap4-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--CSS-->
  <link rel="stylesheet" href="css/login.css">
</head>
<style>


</style>

<body>
  <!-- login form -->
  <div class="container">

     <img src="img/logo-login.jpg" alt="logotipo" width="100" height="100"> 
    <form action="App/session.php" method="post" class="form">
      <div class="mb-3">
        <label for="usuario" class="form-label">Usuario</label>
        <input type="text" class="form-control" name="username" placeholder="Login">
        <div id="emailHelp" class="form-text">Nunca compartilhe seu login.</div>
      </div>
      <div class="mb-3">
        <label for="Password" class="form-label">Senha</label>
        <input type="password" class="form-control" name="password" placeholder="Senha">
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Lembre-me</label>
      </div>
      <button type="submit" class="btn btn-primary">Entrar</button>
    </form>

  </div>

  <!--JavaScript at end of body for optimized loading-->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>

</html>