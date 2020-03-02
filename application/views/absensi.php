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
  
<h4><strong>Data Absensi</strong></h4>



<div align="right">

<a class="btn btn-primary btn-sm" href=" <?php echo base_url('identitas/index') ?>"> <i class="fa fa-reply "></i> Back</a>
</div>


<table  class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIS</th>
        <th>Tanggal</th>
       
        <th colspan="3">Action</th>
        </tr>

        <?php
        $no = 1;
        foreach ($absensi as $abs) : ?>

        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $abs->nama?></td>
            <td><?php echo $abs->nis?></td>
            
           
        </tr>
        <?php endforeach; ?>
      </table>  
        
</section>
</div>