<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Identitas Santri</h1>
          </div>       
        </div>
      </div>
    </div>
    
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3 class="m-0 text-dark">Identitas Santri</h3>
          </div>       
        </div>
    
    </div>
   
   <section class="content">
      <button class="btn btn-info btn-sm"><i class="fa fa-plus" data-toggle="modal" data-target="#staticBackdrop"> Tambah Santri</i></button>
      <a class="btn btn-warning" href=" <?php echo base_url('identitas/pdf') ?>"> <i class="fa fa-file"></i> Export PDF & Print</a>

      <div class="form-inline">
      <?php echo form_open('identitas/search') ?>
      <input type="text" name="keyword" class="form-control" placeholder="Search">
      <button type="submit" class="btn btn-success"><i class="fa fa-search"></i></button>
      <?php echo form_close() ?>
      </div>


      <table  class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <tr>
        <th>No</th>
        <th>Nama Lengkap</th>
        <th>NIS</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Alamat</th>
        <th>Wali</th>
        <th>Kelas Pondok</th>
        <th>Kelas Payung</th>
        <th>Semester</th>
        <th>Image</th>
        <th colspan="3">Action</th>
        </tr>

        <?php
        $no = 1;
        foreach ($identitas as $idnt) : ?>

        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $idnt->nama?></td>
            <td><?php echo $idnt->nis?></td>
            <td><?php echo $idnt->tempat_lahir?></td>
            <td><?php echo $idnt->tanggal_lahir?></td>
            <td><?php echo $idnt->alamat?></td>
            <td><?php echo $idnt->wali?></td>
            <td><?php echo $idnt->kelas_pondok?></td>
            <td><?php echo $idnt->kelas_payung?></td>
            <td><?php echo $idnt->semester?></td>
            <td>
              <img src="<?php echo base_url(); ?> ../../assets/foto/<?php echo $idnt->image ?>" width="90" height="110">
            </td>
            <td><?php echo anchor ('identitas/detail/'.$idnt->id,'<div class="btn btn-primary btn-sm"><i class="fas fa-copy"></i></div>') ?></td>
            <td onclick="javascriot: return confirm('Anda yakin ingin menghapus data ini ?')"><?php echo anchor('identitas/hapus/'.$idnt->id,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>')?></td>
            <td><?php echo anchor ('identitas/edit/'.$idnt->id,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
        </tr>
        <?php endforeach; ?>
      </table>  
   </section>
   <!-- Button trigger modal -->

<!-- Modal tambah -->
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
        

        <?php echo form_open_multipart('identitas/tambah_aksi'); ?>

        <div class="form-group">
        <label> Nama Santri</label>
        <input type="text" name="nama" class="form-control">
        </div>

        <div class="form-group">
        <label> NIS </label>
        <input type="text" name="nis" class="form-control">
        </div>

        <div class="form-group">
        <label>Tempat Lahir</label>
        <input type="text" name="tempat_lahir" class="form-control">
        </div>

        <div class="form-group">
        <label>Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" class="form-control">
        </div>

        <div class="form-group">
        <label>Alamat</label>
        <input type="text" name="alamat" class="form-control">
        </div>

        <div class="form-group">
        <label>Wali</label>
        <input type="text" name="wali" class="form-control">
        </div>

        <div class="from-group">
        <label>Kelas Pondok</label>
        <select name="kelas_pondok"  class="form-control">
        <option>Kelas 1</option>
        <option>Kelas 2</option>
        <option>Kelas 3</option>
        </select>
        </div>

        <div class="from-group">
        <label>Kelas Payung</label>
        <select name="kelas_payung"  class="form-control">
        <option>Kelas 1</option>
        <option>Kelas 2</option>
        <option>Kelas 3</option>
        </select>
        </div>

        <div class="from-group">
        <label>Semester</label>
        <select name="semester"  class="form-control">
        <option>Semester 1</option>
        <option>Semester 2</option>
        </select>
        </div>

        <div class="form-group">
        <label>Image</label>
        <input type="file" name="image" class="form-control">
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


<!-- Modal Edit -->

<!-- <div class="modal fade" id="staticBackdrop2" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Masukkan Data Santri Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php foreach($identitas as $idnt)?>
        <form action="<?php echo base_url().'identitas/update'; ?>" method="post"> 

        <div class="from-group">
        <label>Nama Santri</label>
        <input type="hidden" name="id" class="form-control" value="<?php echo $idnt->id ?>">
        <input type="text" name="nama" class="form-control" value="<?php echo $idnt->nama ?>">
        </div>

        <div class="from-group">
        <label>NIS</label>
        <input type="text" name="nis" class="form-control" value="<?php echo $idnt->nis ?>">
        </div>

        <div class="from-group">
        <label>Tempat Lahir</label>
        <input type="text" name="tempat_lahir" class="form-control" value="<?php echo $idnt->tempat_lahir ?>">
        </div>

        <div class="from-group">
        <label>Tanggal Lahir</label>
        <input type="text" name="tanggal_lahir" class="form-control" value="<?php echo $idnt->tanggal_lahir ?>">
        </div>

        <div class="from-group">
        <label>Alamat</label>
        <input type="text" name="alamat" class="form-control" value="<?php echo $idnt->alamat ?>">
        </div>

        <div class="from-group">
        <label>Wali</label>
        <input type="text" name="wali" class="form-control" value="<?php echo $idnt->wali ?>">
        </div>

        <div class="from-group">
        <label>Kelas Pondok</label>
        <select name="kelas_pondok"  class="form-control"value="<?php echo $idnt-> kelas_pondok ?>">
        <option>Kelas 1</option>
        <option>Kelas 2</option>
        <option>Kelas 3</option>
        </select>
        </div>

        <div class="from-group">
        <label>Kelas Payung</label>
        <select name="kelas_payung"  class="form-control"value="<?php echo $idnt->kelas_payung ?>">
        <option>Kelas 1</option>
        <option>Kelas 2</option>
        <option>Kelas 3</option>
        </select>
        </div>

        <div class="from-group">
        <label>Semester</label>
        <select name="semester"  class="form-control"value="<?php echo $idnt->semester ?>">
        <option>Semester 1</option>
        <option>Semester 2</option>
        </select>
        </div>

        <div class="from-group">
        <label>Image</label>
        <input type="text" name="image" class="form-control" value="<?php echo $idnt->image ?>">
        </div>
        
        <button type="reset" class="btn btn-danger">Reset</button>
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
    </div>
  </div> -->
</div>
  </div>