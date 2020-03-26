<body class="bg-gradient-info">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">
                  <i class="fa fa-user"></i>
                  Registro de Estudiantes
                </h1>
              </div>
              <form action="" class="user" method="post">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="names" class="form-control form-control-user" placeholder="Nombre Completo" required>
                  </div>
                  <div class="col-sm-6">
                    <input type="date" name="birthdate" class="form-control form-control-user" placeholder="Fecha Nacimiento yyyy-mm-dd" required>
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" name="email" class="form-control form-control-user" placeholder="Correo Electrónico" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control form-control-user" placeholder="Contraseña" required>
                </div>
                <button class="btn btn-success btn-user btn-block">
                  <i class="fa fa-save"></i>
                  Registrar
                </button>
              </form>
              <hr>
              <div class="text-center">
                <a class="btn btn-link" href="index.php">
                  <i class="fa fa-arrow-left"></i>
                  Ingreso de Usuarios 
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php 
      if ($_POST) {
        $names     = $_POST['names'];
        $birthdate = $_POST['birthdate'];
        $email     = $_POST['email'];
        $password  = md5($_POST['password']);

        if(addStudent($names, $birthdate, $email, $password, $conn)) {
          $_SESSION['message'] = "El Estudiante $names se Adiciono con Exito!";
        }

      }

    ?>
  </div>