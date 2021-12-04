<?php $title = "TECH | Add-Products";
include "header.php"  ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit-Products</h1>
        </div>
        <div class="col-sm-12">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Project Add</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <form action="edit.php?id=<?php echo $_GET['id'] ?>" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">General</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>

            <script type="text/javascript">
              function preview() {
                thumb.src = URL.createObjectURL(event.target.files[0]);
              }
            </script>

            <div class="card-body">
              <?php $npro = $product->getProductById($_GET['id']);

              foreach ($npro as  $value1) {
              ?>
                <div class="form-group">

                  <label for="inputName">Name</label>
                  <input type="text" id="inputName" class="form-control" name="name" value="<?php echo $value1['name']; ?>">

                </div>

                <div class="form-group">
                  <label for="inputStatus">Manufacture</label>
                  <select id="inputStatus" class="form-control custom-select" name="manu">
                    <option selected disabled>Select one</option>
                    <?php
                    foreach ($getAllManu as $value) {
                      if ($value1["manu_id"] == $value['manu_id']) { ?>
                        <option selected value=<?php echo $value['manu_id']; ?>><?php echo $value['manu_name']; ?></option>
                      <?php    } else {  ?><option value=<?php echo $value['manu_id']; ?>><?php echo $value['manu_name']; ?></option>
                      <?php } ?>

                    <?php  } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="inputStatus">Protype</label>
                  <select id="inputStatus" class="form-control custom-select" name="pro">
                    <option selected disabled>Select one</option>
                    <?php
                    foreach ($getallpro as $value) {
                      if ($value1["type_id"] == $value['type_id']) { ?>
                        <option selected value=<?php echo $value['type_id']; ?>><?php echo $value['type_name']; ?></option>
                      <?php    } else {  ?><option value=<?php echo $value['type_id']; ?>><?php echo $value['type_name']; ?></option>
                    <?php }
                    } ?>
                  </select>
                </div>


                <div class="form-group">
                  <label for="inputClientCompany">Price</label>
                  <input type="text" id="inputClientCompany" class="form-control" name="price" value="<?php echo $value1['price']; ?>">
                </div>


                <div class="form-group">
                  <label for="inputDescription">Description</label>
                  <textarea id="inputDescription" class="form-control" rows="4" name="desc"><?php echo $value1['descripsion']; ?></textarea>
                </div>
                <script>
                  var loadFile = function(event) {
                    var reader = new FileReader();
                    reader.onload = function() {
                      var output = document.getElementById('thumb');
                      output.src = reader.result;
                    };
                    reader.readAsDataURL(event.target.files[0]);
                  };
                </script>

                <div class="form-group">
                  <label for="inputProjectLeader">image</label>
                  <input type="file" onchange="loadFile(event)" id="ProjectLeader" class="form-control" name="image" accept="image/*">
                  <img id="thumb" src="../img/<?php echo $value1['image'] ?>" width="200px" />
                </div>

              <?php } ?>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>

      </div>
      <div class="row">
        <div class="col-12">

          <input type="submit" value="Change" class="btn btn-success float-right" name="submit">
        </div>
      </div>
    </form>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<footer class="main-footer">
  <div class="float-right d-none d-sm-block">
    <b>Version</b> 3.1.0
  </div>
  <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>

</html>