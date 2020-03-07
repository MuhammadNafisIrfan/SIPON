<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-light">.</h1>
          </div>       
        </div>
      </div>
    </div>
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Pelanggaran Santri</h1>
          </div>       
        </div>
      </div>
    </div>
   
   <section class="content">
   <button class="btn btn-primary btn-sm"><i class="fa fa-plus" data-toggle="modal" data-target="#staticBackdrop"> Tambah Santri</i></button>
    <a class="btn btn-warning btn-sm" href=" <?php echo base_url('pelanggaran/pdf') ?>"> <i class="fa fa-file"></i> Export PDF & Print</a>
    <div class="form-inline">
      <?php echo form_open('pelanggaran/search') ?>
      <input type="text" name="keyword" class="form-control" placeholder="Search">
      <button type="submit" class="btn btn-success"><i class="fa fa-search"></i></button>
      <?php echo form_close() ?>
      </div>
      <table  class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Pelanggaran</th>
        <th>Tanggal</th>
        <th colspan="2">Action</th>
        </tr>

        <?php
        $no = 1;
        foreach ($pelanggaran as $pg) : ?>

        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $pg->nama_santri?></td>
            <td><?php echo $pg->pelanggaran?></td>
            <td><?php echo $pg->tanggal?></td>
            <td onclick="javascriot: return confirm('Anda yakin ingin menghapus data ini ?')"><?php echo anchor('pelanggaran/hapus/'.$pg->id,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>')?></td>
            <td><?php echo anchor ('pelanggaran/edit/'.$pg->id,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
           
        </tr>
        <?php endforeach; ?>
      </table>
   </section>
   <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Masukkan Data Santri</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- <form method="post" action="<?php echo base_url().'pelanggaran/tambah_aksi';?>"> -->

        <?php echo form_open_multipart('pelanggaran/tambah_aksi'); ?>

        <div class="form-group">
        <label> Nama Santri</label>
        <select name="nama_santri"class="form-control">
        <option> dff</option>
        <option>paii</option>
        </select>
        </div>

        <div class="form-group">
        <label> Pelanggaran </label>
        <select name="pelanggaran"class="form-control">
        <option> dff</option>
        <option>paii</option>
        </select>
        
        </div>

        <div class="form-group">
        <label>Tanggal</label>
        <input type="date" name="tanggal" class="form-control">
        </div>


        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="reset" class="btn btn-danger">Reset</button>
        <button type="submit" class="btn btn-success">Submit </button>
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>

</div>
</div>