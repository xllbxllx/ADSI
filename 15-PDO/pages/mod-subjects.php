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
              <i class="fa fa-book"></i>
              Módulo Materias
            </h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <div class="col-xl-12 mb-4">
              <a class="btn btn-success" href="subjects/add.php"> 
                <i class="fa fa-plus"></i>
                Adicionar 
              </a>
              <hr>
              <?php $subs = listSubjects($conn); ?>
              <table id="dataTable" class="table table-borderedm table-hover table-striped">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                  </tr>
                </tfoot>
                <tbody>
                  <?php foreach ($subs as $sb): ?>
                    <tr>
                      <td><?php echo $sb['id']; ?></td>
                      <td><?php echo $sb['name']; ?></td>
                      <td>
                        <a class="btn btn-sm btn-light" href="subjects/edit.php?id=<?php echo $sb['id']; ?>"> 
                          <i class="fa fa-pen"></i> 
                        </a>
                        <a class="btn btn-sm btn-danger btn-delete" href="javascript:;" data-id="<?php echo $sb['id']; ?>" data-dir="subjects"> 
                          <i class="fa fa-trash"></i> 
                        </a>
                      </td>
                    </tr>
                  <?php endforeach ?>
                </tbody>
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