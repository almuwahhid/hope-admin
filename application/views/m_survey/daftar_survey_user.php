<div class="dashboard-ecommerce" style="min-height: 760px;">
  <div class="container-fluid dashboard-content ">
    <!-- ============================================================== -->
    <!-- pageheader  -->
    <!-- ============================================================== -->
    <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
          <h2 class="pageheader-title">Daftar Survey Pengguna </h2>
          <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
          <!-- <div class="page-breadcrumb">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('wisata') ?>" class="breadcrumb-link">Wisata</a></li>
                <li class="breadcrumb-item active" aria-current="page">Daftar Survey Pengguna</li>
              </ol>
            </nav>
          </div> -->
        </div>
      </div>
    </div>

    <div class="ecommerce-widget">
      <div class="row">
        <!-- ============================================================== -->

        <!-- ============================================================== -->

        <!-- recent orders  -->
        <!-- ============================================================== -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="card">
            <h5 class="card-header">Daftar Pengguna</h5>
            <div class="card-body p-0">
              <div class="table-responsive">
                <form action="<?=base_url('survey/sort')?>" method="post" enctype="multipart/form-data">
                  <div class="w-100" style="margin-top:10px;margin-bottom:10px">
                    <div style="float:right">
                      <input type="submit" href="#" class="btn btn-primary" value="Terapkan"/>
                    </div>
                    <div class="col-md-3" style="float:right">
                      <select class="form-control" id="sel1" name="sortby">
                        <option <?= ($data['sortby'] == "alphabetic" ? "selected" : "") ?> value="alphabetic">Alphabetic</option>
                        <option <?= ($data['sortby'] == "newest" ? "selected" : "") ?> value="newest">Newest</option>
                      </select>
                    </div>
                    <div class="col-md-1" style="float:right;padding-top:8px;text-align:right">
                      Sort by :
                    </div>
                  </div>
                </form>
                <table class="table">
                  <thead class="bg-light">
                    <tr class="border-0">
                      <th class="border-0 centerHorizontal" style="width:20px">No</th>
                      <th class="border-0">Nama</th>
                      <th class="border-0 text-center">Jenis Kelamin</th>
                      <th class="border-0 text-center">Semester</th>
                      <th class="border-0 text-center">Jumlah Survey</th>
                      <th class="border-0 text-center">Lihat Survey</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 0;
                    foreach ($data['users'] as $k => $user) { ?>
                      <tr>
                        <td class="centerHorizontal text-center">
                          <?= ++$no;?>
                        </td>
                        <td>
                          <?= $user->nama ?>
                        </td>
                        <td class="text-center">
                          <?= $user->jenis_kelamin ?>
                        </td>
                        <td class="text-center">
                          <?= $user->semester == "" ? "-":$user->semester ?>
                        </td>
                        <td class="text-center">
                          <?= $user->total ?>
                        </td>
                        <td class="text-center">
                          <a href='<?= base_url()."survey/detail/".$user->id_user; ?>'>
                            <i class="fas fa-search"></i>
                          </a>
                        </td>
                      </tr>
                      <?php }?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>



        <!-- <div class="col-md-12">
          <nav aria-label="Page navigation">
            <ul class="pagination">
              <?php
              if($data['jumlah']>1){
                for($i=1;$i<=$data['jumlah'];$i++){
                  if(isset($data['page'])){
                    if($data['page']==$i){
                      echo '<li class="page-item active"><a class="page-link">'.$i.'</a></li>';
                    }else{
                      echo "<li class='page-item'><a class='page-link' href='?p=".$i."'>".$i."</a></li>";
                    }
                  }else{
                    if($i==1){
                      echo '<li class="active page-item"><a class="page-link">'.$i.'</a></li>';
                    }else{
                      echo "<li class='page-item'><a class='page-link' href='?p=".$i."'>".$i."</a></li>";
                    }
                  }
                }
              }
              ?>
            </ul>
          </nav>
        </div> -->

      </div>
    </div>


  </div>
</div>
