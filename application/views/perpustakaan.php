<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-light">.</h1>
          </div>       
        </div>
      </div>
    </div>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Peminjaman Inventaris PONDOK</h1>
          </div>       
        </div>
      </div>
    </div>
    
   
   <section class="content">
   <button class="btn btn-info btn-sm"><i class="fa fa-plus" data-toggle="modal" data-target="#staticBackdrop"> Tambah Data</i></button>
   <a class="btn btn-warning btn-sm" href=" <?php echo base_url('perpustakaan/pdf') ?>"> <i class="fa fa-file"></i> Export PDF & Print</a>
   <div class="form-inline">
      <?php echo form_open('perpustakaan/search') ?>
      <input type="text" name="keyword" class="form-control" placeholder="Search">
      <button type="submit" class="btn btn-success"><i class="fa fa-search"></i></button>
      <?php echo form_close() ?>
      </div>
      <table  class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <tr>
        <th>No</th>
        <th>Nama</th>
        <th>PLP</th>
        <th>Pinjaman</th>
        <th>Tanggal Pinjam</th>
        <th>Tanggal Balik</th>
        </tr>

        <?php
        $no = 1;
        foreach ($perpustakaan as $perpus) : ?>

        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $perpus->nama_santri?></td>
            <td><?php echo $perpus->plp?></td>
            <td><?php echo $perpus->pinjaman?></td>
            <td><?php echo $perpus->tanggal_minjam?></td>
            <td><?php echo $perpus->tanggal_balik?></td>
           
        </tr>
        <?php endforeach; ?>
      </table>
   </section>
   <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Masukkan Data Perpustakaan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url().'perpustakaan/tambah_aksi';?>">

        <div class="form-group">
        <label> Nama Santri</label>
        <input type="text" name="nama_santri" class="form-control">
        </div>

        <div class="form-group">
        <label> PLP </label>
        <input type="text" name="plp" class="form-control">
        </div>

        <div class="form-group">
        <label>Pinjaman</label>
        <input type="text" name="pinjaman" class="form-control">
        </div>

        <div class="form-group">
        <label>Tanggal Pinjam</label>
        <input type="datetime-local" name="tanggal_minjam" class="form-control">
        </div>

        <div class="form-group">
        <label>Tanggal Kembali</label>
        <input type="datetime-local" name="tanggal_balik" class="form-control">
        </div>

        
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="reset" class="btn btn-danger">Reset</button>
        <button type="submit" class="btn btn-success">Submit </button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>