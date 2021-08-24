  <!-- Content Wrapper. Contains page content -->


  <!-- Content Header (Page header) -->
  <section class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
              <div class="col-sm-6">
                  <h1>Cakes</h1>
              </div>
              <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="<?= DOCUMENT_ROOT . "/admin" ?>">Home</a></li>
                      <li class="breadcrumb-item active">Cakes</li>
                  </ol>
              </div>
          </div>
      </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
      <div class="container-fluid">
          <div class="row">
              <div class="col-12">
                  <div class="card">
                      <div class="card-header">
                          <h3 class="card-title">DataTable with minimal features & hover style</h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                          <table id="myTable" class="table table-bordered table-hover">
                              <thead>
                                  <tr>
                                      <th>STT</th>
                                      <th>Name</th>
                                      <th>Price</th>
                                      <th>Size</th>
                                      <th>Image</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <?php foreach ($data['cakes'] as $key => $cake) : ?>

                                      <tr>
                                          <td>Gecko</td>
                                          <td>Camino 1.0</td>
                                          <td>OSX.2+</td>
                                          <td>1.8</td>
                                          <td>A</td>
                                      </tr>
                                  <?php endforeach; ?>

                              </tbody>
                              <tfoot>
                                  <tr>
                                      <th>Rendering engine</th>
                                      <th>Browser</th>
                                      <th>Platform(s)</th>
                                      <th>Engine version</th>
                                      <th>CSS grade</th>
                                  </tr>
                              </tfoot>
                          </table>
                      </div>
                      <!-- /.card-body -->
                  </div>
                  <!-- /.card -->


                  <!-- /.card -->
              </div>
              <!-- /.col -->
          </div>
          <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
  </section>
  <!-- /.content -->