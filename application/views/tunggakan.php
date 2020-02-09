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
      <table  class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Nominal</th>
        <th>Keterangan</th>
        </tr>

        <?php
        $no = 1;
        foreach ($tunggakan as $tgk) : ?>

        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $tgk->nama?></td>
            <td>Rp. <?php echo $tgk->nominal?></td>
            <td><?php echo $tgk->keterangan?></td>
           
        </tr>
        <?php endforeach; ?>
      </table>
   </section>
  </div>