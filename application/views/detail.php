<div class="content-wrapper">
<section class="content">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-light">Identitas Santri</h1>
          </div>       
        </div>
      </div>
    </div>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<h4><strong>DETAIL DATA SANTRI</strong></h4>



<div  align="right">
<a class="btn btn-primary btn-sm" href=" <?php echo base_url('identitas/absensi') ?>"> <i class="fa fa-file "></i> Data Absensi</a>
<a class="btn btn-primary btn-sm" href=" <?php echo base_url('identitas/index') ?>"> <i class="fa fa-reply "></i> Back</a>
</div>


    <table  class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <tr>
            <th>Nama Lengkap</th>
            <td><?php echo $detail->nama ?></td>
        </tr>
        <tr>
            <th>NIS</th>
            <td><?php echo $detail->nis ?></td>
        </tr>
        <tr>
            <th>Tempat Lahir</th>
            <td><?php echo $detail->tempat_lahir ?></td>
        </tr>
        <tr>
            <th>Tanggal Lahir</th>
            <td><?php echo $detail->tanggal_lahir ?></td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td><?php echo $detail->alamat ?></td>
        </tr>
        <tr>
            <th>Wali</th>
            <td><?php echo $detail->wali ?></td>
        </tr>
        <tr>
            <th>Kelas Pondok</th>
            <td><?php echo $detail->kelas_pondok ?></td>
        </tr>
        <tr>
            <th>Kelas Payung</th>
            <td><?php echo $detail->kelas_payung ?></td>
        </tr>
        <tr>
            <th>Semester</th>
            <td><?php echo $detail->semester ?></td>
        </tr>
        <tr>
            <th>Image</th>
            <td> <img src="<?php echo base_url(); ?> ../../assets/foto/<?php echo $detail->image ?>" width="90" height="110"></td>
        </tr>
    </table>
        
</section>
</div>