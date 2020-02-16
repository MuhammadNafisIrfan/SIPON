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
      <table  class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Semester</th>
        <th>Tanggal Masuk</th>
        </tr>

        <?php
        $no = 1;
        foreach ($riwayat as $rwt) : ?>

        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $rwt->nama_santri?></td>
            <td><?php echo $rwt->kelas?></td>
            <td><?php echo $rwt->semester?></td>
            <td><?php echo $rwt->	tanggal_masuk?></td>
           
        </tr>
        <?php endforeach; ?>
      </table>
   </section>
  </div>