<?php
function tanggal($tanggal){
  $bulan = array (
    1 =>   'Januari',
    'Februari',
    'Maret',
    'April',
    'Mei',
    'Juni',
    'Juli',
    'Agustus',
    'September',
    'Oktober',
    'November',
    'Desember'
  );
  $pecahkan = explode('-', $tanggal);
  return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Laporan Survey Pengguna</title>
  <style type="text/css">
    #outtable{

    }
    .short{

    }

    table{
      font-family: arial;
      color:#5E5B5C;

    }
    thead th{
      text-align: left;
      padding: 10px;
      border: 1px solid #e3e3e3;
    }
    .withborder td{

      border: 1px solid #e3e3e3;
      padding: 10px;
    }
    .number{
      border-left: 1px solid #e3e3e3;
    }
    .bottom_border{
      border-bottom: 1px solid #e3e3e3;
    }
    tbody td{
      padding: 10px;
    }
    .withborder tr:nth-child(even){
      background: #F6F5FA;
    }
    tr{
      font-size: 12px;
    }
    .withbotder tr:hover{
      background: #EAE9F5
    }
    .text-center{
      text-align: : center
    }
    @print{
      @page :footer {color: #fff }
      @page :header {color: #fff}
    }
  </style>

  <script src="<?php echo base_url('assets/vendor/jquery/jquery-3.3.1.min.js')?>"></script>
  <!-- <script src="<?php echo base_url('assets/js/highcharts.js')?>"></script> -->
  <script src="http://code.highcharts.com/highcharts.js"></script>
  <script src="http://code.highcharts.com/modules/exporting.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/rgbcolor@^1/index.js"></script>
  <!-- Optional if you want blur -->
  <script src="https://cdn.jsdelivr.net/npm/stackblur-canvas@^1/dist/stackblur.min.js"></script>
  <!-- Main canvg code -->
  <script src="https://cdn.jsdelivr.net/npm/canvg/dist/browser/canvg.min.js"></script>

</head>
<body style="font-family: arial">
  <!-- In production server. If you choose this, then comment the local server and uncomment this one-->
  <!-- <img src="<?php // echo $_SERVER['DOCUMENT_ROOT']."/media/dist/img/no-signal.png"; ?>" alt=""> -->
  <!-- In your local server -->

  <!-- <img src="logo_horizontal.png" alt="" style="margin-top:-5px" class="user-avatar-md rounded-circle"> &nbsp; &nbsp;  -->
  <?php
  setlocale(LC_ALL, 'IND');
  ?>
  <div style="width:100%;height:20px;position:relative">
    <img style="width:80px;height: 80px;float:left;margin-right:24px" src="<?= base_url() ?>assets/images/logo_uny.png" alt="">
    <div style="float:center;text-align:center;width:100%;position:absolute;margin-top:10px">
      <p style="float:center">
        <span style="font-size:25px;text-align:center">H.O.P.E.</span><br><br>
        <span style="font-size:15px;margin-bottom: 8px;text-align:center">HELP OCCUPATION PERFORMANCE EFFECTIVELY</span>

      </p>
    </div>
    <img style="width:80px;height: 80px;float:right;" src="<?= base_url() ?>assets/images/hope.png" alt="">
  </div>
  <hr style="height:2px;background-color:#333;margin-top:15px">
  <div style="width:100%;position:relative;margin-right:10px">
    <h4>Laporan Survey <?= $data['user']->nama ?></h4>
    <br>
    <b><span style="text-size:12px;margin-bottom: 8px;text-align:center">Data</span></b>
    <div style="margin-top: 20px;margin-left:10px">

      <table style="border-color:black">
        <tbody>
          <tr>
            <td style="width:280px" class="border-0">
              <img style="width:16px;height: 16px;float:left;margin-right:10px" src="<?= base_url() ?>assets/images/nametag.png" alt="">
              <div style="float:left;margin-bottom:2px">
                <b style="font-size:12">Nama</b>
              </div>
              <?= $data['user']->nama ?>
            </td>
            <td style="width:280px" class="border-0">
              <img style="width:14px;height: 16px;float:left;margin-right:10px" src="<?= base_url() ?>assets/images/university.png" alt="">
              <div style="float:left;margin-bottom:2px">
                <b style="font-size:12">Universitas</b>
              </div>
              <?= $data['user']->universitas ?>
            </td>
          </tr>
          <tr>
            <td style="width:280px" class="border-0">
              <img style="width:16px;height: 16px;float:left;margin-right:10px" src="<?= base_url() ?>assets/images/birthdate.png" alt="">
              <div style="float:left;margin-bottom:2px">
                <b style="font-size:12">Umur</b>
              </div>
              <?= $data['user']->age ?> Tahun
            </td>
            <td style="width:280px" class="border-0">
              <img style="width:14px;height: 16px;float:left;margin-right:10px" src="<?= base_url() ?>assets/images/classroom.png" alt="">
              <div style="float:left;margin-bottom:2px">
                <b style="font-size:12">Program Studi</b>
              </div>
              <?= $data['user']->program_studi ?>
            </td>
          </tr>
          <tr>
            <td style="width:280px" class="border-0">
              <img style="width:16px;height: 16px;float:left;margin-right:10px" src="<?= base_url() ?>assets/images/phone.png" alt="">
              <div style="float:left;margin-bottom:2px">
                <b style="font-size:12">Nomor Telepon</b>
              </div>
              <?= $data['user']->telp ?>
            </td>
            <td style="width:280px" class="border-0">
              <img style="width:14px;height: 16px;float:left;margin-right:10px" src="<?= base_url() ?>assets/images/class.png" alt="">
              <div style="float:left;margin-bottom:2px">
                <b style="font-size:12">Semester</b>
              </div>
              Semester <?= $data['user']->semester ?>
            </td>
          </tr>
          <tr>
            <td style="width:280px" class="border-0">
              <img style="width:16px;height: 16px;float:left;margin-right:10px" src="<?= base_url() ?>assets/images/email.png" alt="">
              <div style="float:left;margin-bottom:2px">
                <b style="font-size:12">Email</b>
              </div>
              <?= $data['user']->email ?>
            </td>
            <td style="width:280px" class="border-0">
              <img style="width:14px;height: 16px;float:left;margin-right:10px" src="<?= base_url() ?>assets/images/job.png" alt="">
              <div style="float:left;margin-bottom:2px">
                <b style="font-size:12">Pekerjaan Impian</b>
              </div>
              <?= $data['user']->pekerjaan_impian ?>
            </td>
          </tr>
          <tr>
            <td style="width:280px" class="border-0">
              <img style="width:16px;height: 16px;float:left;margin-right:10px" src="<?= base_url() ?>assets/images/gender.png" alt="">
              <div style="float:left;margin-bottom:2px">
                <b style="font-size:12">Jenis Kelamin</b>
              </div>
              <?= $data['user']->jenis_kelamin ?>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <?php $no=1; ?>
  <?php foreach($data['survey'] as $datas): ?>
   <br/><br/><br/><br/>
   <b><span style="text-size:12px;margin-bottom: 8px;text-align:center">Survey User</span></b>
   <div id="outtable" style="margin-top: 20px;margin-left:-80px">
     <table style="border-color:black">
       <tbody>
         <tr>
           <td colspan="3"><b><?=$no?>. <?= tanggal(explode(' ', $datas->tanggal_survey)[0]) ?></b></td>
         </tr>
         <tr>
           <td style="width:120px">&nbsp;&nbsp;&nbsp;Hasil Survey</td>
           <td style="width:10px"> : </td>
           <td>
             <?= $datas->nama_status ?>
           </td>
         </tr>
         <tr>
           <td style="width:120px">&nbsp;&nbsp;&nbsp;Skor Komitmen</td>
           <td style="width:10px"> : </td>
           <td>
             <?= $datas->identitas_survey[0]->score ?>
           </td>
         </tr>
         <tr>
           <td style="width:120px">&nbsp;&nbsp;&nbsp;Skor Eksplo</td>
           <td style="width:10px"> : </td>
           <td>
             <?= $datas->identitas_survey[1]->score ?>
           </td>
         </tr>
         <tr>
           <td>&nbsp;&nbsp;&nbsp;Deskripsi Hasil</td>
           <td style="width:10px"> : </td>
           <td style="width:350px">
             <?= $datas->deskripsi_status ?>
           </td>
         </tr>
       </tbody>
     </table>
   </div>

   <?php
    if($datas->istaskpertanyaan){
    ?>
      <div id="outtable" style="margin-top: 20px;margin-left:20px">
        <table style="border-color:black">
           <tbody class="withborder">
             <tr>
               <th colspan="4"  style="border: 0px solid #e3e3e3;">
                 <span style="">Informasi Task Intervensi</span><br><br><br>
               </th>
             </tr>
             <tr>
              <th class="short number" style="text-align:center">No</th>
              <th class="normal" style="text-align:center">Task Intervensi</th>
              <th class="normal" style="text-align:center">Jawaban</th>
              <th class="normal" style="text-align:center">Tanggal Pengerjaan</th>
             </tr>
             <?php $no=1; ?>
             <?php foreach($datas->taskpertanyaan as $taskintervensi): ?>
               <tr>
                 <td style="text-align:center" class="number centerHorizontal text-center">
                   <?= $no;?>
                 </td>
                 <td style="width:250px;text-align:justify">
                   <?= $taskintervensi->intervensi_task ?>
                 </td>
                 <td style="width:100px;text-align:justify">
                   <?php
                    if($taskintervensi->status_task == "N" ){
                      echo "Tidak Setuju, karena ".$taskintervensi->komentar_pertanyaan;
                    } else if($taskintervensi->status_task == "Y" ){
                      echo "Setuju";
                    } else if($taskintervensi->status_task == "T" ){
                      echo "Belum dikerjakan";
                    }
                   ?>
                 </td>
                 <td>
                   <?php
                    if($taskintervensi->tanggal_submit == "0000-00-00 00:00:00" ){
                      echo "-";
                    } else {
                      echo tanggal(explode(' ', $taskintervensi->tanggal_submit)[0])." ".explode(' ', $taskintervensi->tanggal_submit)[1];
                    }
                   ?>
                 </td>
               </tr>
             <?php $no++; ?>
             <?php endforeach; ?>
           </tbody>
        </table>
       </div>
    <?php
    }
   ?>

   <?php $no++; ?>
   <?php endforeach; ?>

   <br><br>
   <div style="width:700px;text-align:right;;margin-top:20px">
     <!-- RIDE Application, <?= strftime('%d %B %Y') ?> -->
     H.O.P.E., <?= tanggal(date('Y-m-d')) ?>
     <br><br><br><br><br><br>
     Chalida, S.Pd. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   </div>
</body>
</html>
