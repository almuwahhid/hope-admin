<div class="dashboard-ecommerce">
  <div class="container-fluid dashboard-content ">
    <!-- ============================================================== -->
    <!-- pageheader  -->
    <!-- ============================================================== -->
    <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
          <h2 class="pageheader-title"><?php if($data["form"]) echo "Tambah"; else echo "Edit"; ?> Artikel </h2>
          <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
          <div class="page-breadcrumb">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=base_url('artikel')?>" class="breadcrumb-link">Daftar Artikel</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php if($data["form"]) echo "Tambah"; else echo "Edit"; ?> Artikel</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- end pageheader  -->
    <!-- ============================================================== -->
    <div class="ecommerce-widget">
      <div class="row">
        <!-- ============================================================== -->

        <!-- ============================================================== -->

        <!-- recent orders  -->
        <!-- ============================================================== -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="card">
            <h5 class="card-header">Masukkan seluruh data dengan benar!</h5>
            <?php
                  if(($this->session->flashdata('alert')) !== null){
                      $message = $this->session->flashdata('alert');
                      $this->load->view('bodyview/alert', ['class' => $message['class'], 'message' => $message['message']]);
                  }
              ?>
            <div class="card-body">
              <form action="<?=base_url('artikel/simpan')?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="inputText3" class="col-form-label">Judul Artikel</label>
                  <input required name="judul_artikel" id="inputText3" type="text" class="form-control" value="<?= $data["form"] == false ? $data["data"]->judul_artikel : "" ?>">
                </div>
                <div class="form-group">
                  <label for="inputText3" class="col-form-label">URL Artikel</label>
                  <input required name="url_artikel" id="inputText4" type="text" class="form-control" value="<?= $data["form"] == false ? $data["data"]->url_artikel : "" ?>"/>
                </div>
                <div class="form-group">
                  <label class="col-form-label">Foto Artikel</label>
                  <?php
                  if(!$data["form"]){
                    ?>
                      <input type="hidden" name="foto_artikel" value="datas/artikel/<?= $data["data"]->foto_artikel ?>">
                      <div class="col-md-12 marg20-bottom"><img src="<?= base_url() ?>datas/artikel/<?= $data["data"]->foto_artikel ?>" alt="artikel" class="rounded" width="180"></div>
                    <?php
                  } else {
                    ?>
                    <input type="hidden" name="action" value="tambah">
                    <?php
                  }
                  ?>
                  <div class="col-md-12 marg10-top">
                    <label style="position:relative" class="custom-file-label" for="customFile" style="text-align:center">Klik untuk memilih foto</label>
                    <input <?= $data["form"] == true ? "required" : "" ?> name="foto_artikel" type="file" class="custom-file-input" id="customFile">
                  </div>
                </div>
                <?php
                if(!$data["form"]){
                  ?>
                    <input type="hidden" name="id" value="<?= $data["data"]->id_artikel ?>">
                    <input type="hidden" name="action" value="edit">
                    <div class="custom-file mb-3">
                      <input type="submit" href="#" class="centerHorizontal btn btn-primary" value="Ubah"></a>
                    </div>
                  <?php
                } else {?>
                  <input type="hidden" name="action" value="tambah">
                  <div class="custom-file mb-3">
                    <input type="submit" href="#" class="centerHorizontal btn btn-primary" value="Tambahkan"></a>
                  </div>
                  <?php
                }
                ?>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
$('#customFile').on('change',function(){
  //get the file name
  var fileName = $(this).val();
  // console.log("iki kenopo "+fileName);
  //replace the "Choose a file" label
  // $(this).next('.custom-file-label').html(fileName);
  if(fileName != ""){
    $('.custom-file-label').html(fileName);
  }
})
</script>
