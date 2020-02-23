<div class="content-wrapper">
    <!-- Content Header (Page header) -->
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
   <button class="btn btn-info btn-sm"><i class="fa fa-plus" data-toggle="modal" data-target="#staticBackdrop"> Tambah Santri</i></button>
   <a class="btn btn-warning" href=" <?php echo base_url('riwayat/pdf') ?>"> <i class="fa fa-file"></i> Export PDF</a>
      <table  class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <tr>
        <th>No</th>
        <th>Nama</th>
        <th>PLP</th>
        <th>Semester</th>
        </tr>

        <?php
        $no = 1;
        foreach ($riwayat as $rwt) : ?>

        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $rwt->nama_santri?></td>
            <td><?php echo $rwt->kelas?></td>
            <td><?php echo $rwt->semester?></td>
           
        </tr>
        <?php endforeach; ?>
      </table>
   </section>
   <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Masukkan Data RIWAYAT</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url().'riwayat/tambah_aksi';?>">

        <div class="form-group">
        <label> Nama Santri</label>
        <input type="text" name="nama_santri" class="form-control">
        </div>

        <div class="form-group">
        <label> PLP </label>
        <input type="text" name="kelas" class="form-control">
        </div>

        <div class="form-group">
        <label>Semester</label>
        <input type="text" name="semester" class="form-control">
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