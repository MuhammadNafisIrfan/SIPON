<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tunggakan Santri</h1>
          </div>       
        </div>
      </div>
    </div>
   
   <section class="content">
   <button class="btn btn-info btn-sm"><i class="fa fa-plus"data-toggle="modal" data-target="#staticBackdrop"> Tambah Santri</i></button>
      <table  class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Nominal</th>
        <th>Keterangan</th>
        <th>Action</th>
        </tr>

        <?php
        $no = 1;
        foreach ($tunggakan as $tgk) : ?>

        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $tgk->nama?></td>
            <td>Rp. <?php echo $tgk->nominal?></td>
            <td><?php echo $tgk->keterangan?></td>
            <td><?php echo anchor ('tunggakan/edit/'.$tgk->id,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
           
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
        <form method="post" action="<?php echo base_url().'tunggakan/tambah_aksi';?>">

        <div class="form-group">
        <label> Nama Santri</label>
        <input type="text" name="nama" class="form-control">
        </div>

        <div class="form-group">
        <label> Nominal </label>
        <input type="text" name="nominal" class="form-control">
        </div>

        <div class="form-group">
        <label>Keterangan</label>
        <input type="text" name="keterangan" class="form-control">
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