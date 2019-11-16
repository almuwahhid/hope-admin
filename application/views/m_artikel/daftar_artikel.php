<div class="dashboard-ecommerce" style="min-height : 88vh">
  <div class="container-fluid dashboard-content ">
    <!-- ============================================================== -->
    <!-- pageheader  -->
    <!-- ============================================================== -->
    <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
          <h2 class="pageheader-title">Daftar Artikel </h2>
          <p class="pageheader-text">H.O.P.E.</p>
          <div class="page-breadcrumb">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">HOPE</a></li>
                <li class="breadcrumb-item active" aria-current="page">Daftar Artikel</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <div class="ecommerce-widget">
      <div class="row">
        <!-- ============================================================== -->

        <!-- ============================================================== -->

        <!-- recent orders  -->
        <!-- ============================================================== -->
        <?php
              if(($this->session->flashdata('alert')) !== null){
                  $message = $this->session->flashdata('alert');
                  $this->load->view('bodyview/alert', ['class' => $message['class'], 'message' => $message['message']]);
              }
          ?>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="card">
            <h5 class="card-header">Artikel yang sudah ditambahkan</h5>
            <div class="card-body p-0">
              <div class="table-responsive">
                <?php
                if(count($data["artikel"]) == 0){
                  ?>
                  <center class="marg50-top marg50-bottom">Data belum tersedia </center>
                  <?php
                } else {
                  ?>
                <table class="table">
                  <thead class="bg-light">
                    <tr class="border-0">
                      <th class="border-0 centerHorizontal" style="width:20px">No</th>
                      <th class="border-0">Judul Artikel</th>
                      <th class="border-0">URL Artikel</th>
                      <th class="border-0 text-center" width="100">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 0;
                    foreach ($data["artikel"] as $k => $tipe) { ?>
                      <tr>
                        <td class="centerHorizontal text-center">
                          <?= ++$no;?>
                        </td>
                        <td>
                          <?= $tipe->judul_artikel ?>
                        </td>
                        <td>
                          <a href="<?= $tipe->url_artikel ?>" target="_blank"><?= $tipe->url_artikel ?></a>
                        </td>
                        <td>
                          <a class="btn btn-success" href='<?= base_url()."artikel/detail/".$tipe->id_artikel; ?>'>
                            <i class="fas fa-edit"></i>
                          </a> &nbsp;&nbsp;
                          <a href="#" onclick="directDelete('<?= base_url()."artikel/delete?id=".$tipe->id_artikel; ?>')">
                            <i class="fas fa-trash"></i>
                          </a>
                        </td>
                      </tr>
                      <?php }?>
                  </tbody>
                </table><?php } ?>
              </div>
              <div class="col-md-12">
                <nav aria-label="Page navigation">
                  <ul class="pagination">
                    <?php
                    if($data['jumlah']>1){
                      for($i=1;$i<=$data['jumlah'];$i++){
                        if(isset($data['page'])){
                          if($data['page']==$i){
                            echo '<li class="page-item active"><a class="page-link">'.$i.'</a></li>';
                          }else{
                            echo "<li class='page-item'><a class='page-link' href='?r=".$i."'>".$i."</a></li>";
                          }
                        }else{
                          if($i==1){
                            echo '<li class="active page-item"><a class="page-link">'.$i.'</a></li>';
                          }else{
                            echo "<li class='page-item'><a class='page-link' href='?r=".$i."'>".$i."</a></li>";
                          }
                        }
                      }
                    }
                    ?>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
