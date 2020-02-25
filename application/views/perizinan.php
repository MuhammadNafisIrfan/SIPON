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
   <a class="btn btn-warning" href=" <?php echo base_url('perizinan/pdf') ?>"> <i class="fa fa-file"></i> Export PDF & Print</a>
      <table  class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Alasan</th>
        <th>Tanggal Keluar</th>
        <th>Tanggal Masuk</th>
        </tr>

        <?php
        $no = 1;
        foreach ($perizinan as $izin) : ?>

        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $izin->nama_santri?></td>
            <td><?php echo $izin->alasan?></td>
            <td><?php echo $izin->tanggal_keluar?></td>
            <td><?php echo $izin->tanggal_masuk?></td>
           
        </tr>
        <?php endforeach; ?>
      </table>
   </section>
  </div>