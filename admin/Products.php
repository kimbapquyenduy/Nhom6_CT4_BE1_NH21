<?php $title = "TECH | Product";
include "header.php"
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Products</h1>
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
        <h3 class="card-title">Products</h3>

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
              <th style="width: 1%">
                Id
              </th>
              <th style="width: 15%" class="text-center">
                Name
              </th>
              <th style="width: 10%" class="text-center">
                Image
              </th>
              <th style="width: 13%" class="text-center">
                Price
              </th>
              <th style="width: 10%" class="text-center">
                Descripsion
              </th>
              <th style="width: 5%" class="text-center">
                Manufacture
              </th>
              <th style="width: 10%" class="text-center">
                Prototype
              </th>
              <th style="width: 10%" class="text-center">
                Create at
              </th>
              <th style="width: 15%" class="text-center">
                Action
              </th>
            </tr>
          </thead>
          <tbody>
            <?php






            // hiển thị 5 sản phẩm trên 1 trang
            $perPage = 6;
            // Lấy số trang trên thanh địa chỉ
            $page = isset($_GET['page']) ? $_GET['page'] : 1;
            // Tính tổng số dòng
            $total = count($getAllProducts);
            // lấy đường dẫn đến file hiện hành
            $url = $_SERVER['PHP_SELF'];

            $Get6Products = $product->get6Products($page, $perPage);
            foreach ($Get6Products as $value) :
            ?>
              <tr>
                <td>
                  <?php echo $value['id'] ?>
                </td>
                <td>
                  <?php echo $value['name'] ?>
                </td>
                <td>
                  <img style="width:90px" class="img-responsive" src="../img/<?php echo $value['image'] ?>">
                </td>
                <td>
                  <?php echo number_format($value['price']) . " VND" ?>

                </td>
                <td class="project_progress">
                  <div style="overflow: scroll;width: 200px; height: 110px"> <?php echo  $value['descripsion'] ?></div>
                </td>
                <td class="project-state">
                  <?php echo $value['manu_name'] ?>
                </td>
                <td class="project-state">
                  <?php echo $value['type_name'] ?>
                </td>
                <td class="project-state">
                  <?php echo $value['created_at'] ?>
                </td>



                <td class="project-actions text-center ">

                  <a class="btn btn-info btn-sm" href="#">
                    <i class="fas fa-pencil-alt">
                    </i>
                    Edit
                  </a>
                  <a class="btn btn-danger btn-sm" href="delete.php?id=<?php echo $value['id']; ?>">
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
      <div class="card-footer">
        <nav aria-label="Contacts Page Navigation">
          <ul class="pagination justify-content-center m-0">
            <?php echo $product->paginate2($url, $total, $perPage) ?>


          </ul>
        </nav>
      </div>
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include "footer.html" ?>