<div class="content-wrapper">
     <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary ">
    <!-- Brand Logo -->
    <a href="../admin/dashboard" class="brand-link">
      <img src=" <?php echo base_url() ?>assets/dist/img/qbs_logo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SIPON QBS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
   

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


    <section class="content">
         <?php foreach($identitas as $idnt) {?>
    <?php echo form_open_multipart('identitas/update'); ?>
       
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
        <input type="file" name="image" class="form-control" value="<?php echo $idnt->image ?>">
        </div>
        
        <button type="reset" class="btn btn-danger">Reset</button>
        <button type="submit" class="btn btn-success">Submit</button>

        </form>
        <?php echo form_close(); ?>
         <?php }?>
    </section>
</div>