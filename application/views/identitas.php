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
   
   <section class="content">
      <table  class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <tr>
        <th>No</th>
        <th>NIS</th>
        <th>Nama Lengkap</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Alamat</th>
        <th>Wali</th>
        <th>Kelas Pondok</th>
        <th>Kelas Payung</th>
        <th>Semester</th>
        <th>Image</th>
        <th>Action</th>
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
            <td><img src="<?php echo $idnt->image?>" width=90px, height=90px></img></td>
            <td><?php echo $idnt->action?></td>
        </tr>
        <?php endforeach; ?>
      </table>
   </section>
  </div>