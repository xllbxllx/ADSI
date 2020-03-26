<!-- Page Wrapper -->
  <div id="wrapper">

    <?php include 'menu-teacher.php'; ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <?php include 'navbar-teacher.php'; ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">
              <i class="fa fa-search"></i>
              Consultar Notas
            </h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <div class="col-xl-6 mb-4">
            <?php if ($_GET): ?>
            <?php 
              $id = $_GET['id'];
              $note = showNote($id, $conn);
            ?>
            <table class="table table-striped table-bordered table-hover">
              <?php foreach ($note as $nt): ?>
              <tr>
                <td colspan="2" class="text-center">
                  <img class="rounded-circle img-thumbnail" src="<?php echo $url.$nt['photo']; ?>" style="width: 14rem; height: 14rem;">
                </td>
              </tr>
              <tr>
                <th>Nombre Completo</th>
                <td><?php echo $nt['uname'] ?></td>
              </tr>
              <tr>
                <th>Materia</th>
                <td><?php echo $nt['sname'] ?></td>
              </tr>
              <tr>
                <th>Nota 1</th>
                <td><?php echo $nt['nt1'] ?></td>
              </tr>
              <tr>
                <th>Nota 2</th>
                <td><?php echo $nt['nt2'] ?></td>
              </tr>
              <tr>
                <th>Nota 3</th>
                <td><?php echo $nt['nt3'] ?></td>
              </tr>
              <tr>
                <th>Nota Final</th>
                <td>
                  <?php if (round($nt['fnote'], 1) >= 3.5): ?>
                      <span class="badge badge-success">
                        <?php echo round($nt['fnote'], 1); ?>
                      </span>
                  <?php else: ?>
                      <span class="badge badge-danger">
                        <?php echo round($nt['fnote'], 1); ?>
                      </span>
                  <?php endif ?>
                </td>
              </tr>
              <?php endforeach ?>
            </table>
            <?php endif ?>
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