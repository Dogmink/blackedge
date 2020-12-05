<!DOCTYPE html>
<html lang='es'>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/normalize.css">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/grid.css">
  <link rel="stylesheet" href="../css/anim.css">
  <link rel="stylesheet" href="../css/estilos.css">
  <link rel="stylesheet" href="../css/mobile.css">
  <title>BlackEdge</title>
</head>
<body>
  <nav class="fadeInDown">
    <div class="BlackEdge_image">
      <img class="logo" src="../images/Logo/LogoL.png" alt="index.html">
    </div>
    </nav>

      <!-- Aquí acaba el nav -->
      <div class="form-panel">
        <div class="login">
          <form action="login.php" method="post">
            <div class="panel">
              <div class="panel-header">
                <h3>LOGIN-PANEL</h3>
                <div class="panel-body">
                  <div class="form-input">
                    <label class="label-panel">Usuario</label>
                    <input class="input-panel" type="text" name="user_name" placeholder="Ingresa tu nombre de usuario" required>
                  </div>
                  <div>
                    <label class="label-panel">Contraseña</label>
                    <input class="input-panel" type="password" name="user_password" placeholder="Ingresa tu contraseña" required>
                  </div>

                  <button class="btn-panel" type="submit">LOGIN</button>


                </div>
              </div>
            </div>

          </form>
        </div>
      </div>




</body>
</html>
