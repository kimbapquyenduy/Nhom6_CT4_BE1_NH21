<?php $title = "TECH | User";
include "header.php" ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>User</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Projects</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">User</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body p-0">
        <table class="table table-striped projects">
          <thead>
            <tr>
              <th style="width: 3%" class="text-center">
                Id
              </th>
              <th style="width: 15%" class="text-center">
                Username
              </th>
              <th style="width: 15%" class="text-center">
                Password
              </th>

              <th style="width: 15%" class="text-center">
                Action
              </th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($getalluser as $value) : ?>
              <tr>
                <td class="text-center">
                  <?php echo $value['userid'] ?>
                </td>
                <td class="text-center">
                  <?php echo $value['username'] ?>
                </td>
                <td class="text-center">
                  <?php echo $value['password'] ?>
                </td>




                <td class="project-actions text-center ">

                  <a class="btn btn-info btn-sm" href="user-edit?id=<?php echo $value['userid'] ?>.php">
                    <i class="fas fa-pencil-alt">
                    </i>
                    Edit
                  </a>
                  <a class="btn btn-danger btn-sm" href="deluser.php?id=<?php echo $value['userid'] ?>">
                    <i class="fas fa-trash">
                    </i>
                    Delete
                  </a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include "footer.html" ?>