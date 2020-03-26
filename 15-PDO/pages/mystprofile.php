<!-- Page Wrapper -->
  <div id="wrapper">

    <?php include 'menu-student.php'; ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <?php include 'navbar-student.php'; ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">
              <i class="fa fa-user"></i>
              Mi Perfil
            </h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <div class="col-xl-6 mb-4">
            <?php 
              $id = $_SESSION['uid'];
              $myprofile = showStudent($id, $conn);
            ?>
            <table class="table table-striped table-bordered table-hover">
              <?php foreach ($myprofile as $mp): ?>
              <tr>
                <td colspan="2" class="text-center bg-gradient-info">
                  <img class="rounded-circle img-thumbnail" src="<?php echo $url.$mp['photo']; ?>" style="width: 14rem; height: 14rem;">
                  <div class="h3 text-light">Estudiante</div>
                </td>
              </tr>
              <tr>
                <th>Nombre Completo</th>
                <td><?php echo $mp['names'] ?></td>
              </tr>
              <tr>
                <th>Correo Electrónico</th>
                <td><?php echo $mp['email'] ?></td>
              </tr>
              <tr>
                <th>Fecha Nacimiento</th>
                <td><?php echo $mp['birthdate'] ?></td>
              </tr>
              <tr>
                <th>Estado</th>
                <td>
                  <?php if ($mp['status'] == "Active"): ?>
                        <span class="badge badge-success">
                          <i class="fa fa-check"></i> Activo
                        </span>
                    <?php else: ?>
                        <span class="badge badge-danger">
                          <i class="fa fa-times"></i> Inactivo
                        </span>
                    <?php endif ?>
                </td>
              </tr>
              <?php endforeach ?>
              <tr>
                <td colspan="2" class="text-center bg-gradient-dark">
                    <a class="btn btn-light btn-sm" href="myprofile/editst.php?id=<?php echo $id ?>">
                      <i class="fa fa-pen"></i> 
                      Modificar Datos
                    </a>
                </td>
              </tr>
            </table>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Todos los derechos reservados &copy; <?php echo date('Y'); ?></span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper