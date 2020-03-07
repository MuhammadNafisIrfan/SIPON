<div class="content-wrapper">
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
            <h1 class="m-0 text-dark">Edit Pelanggaran Santri</h1>
          </div>       
        </div>
      </div>
    </div>

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
 
     <?php foreach($pelanggaran as $pg) { ?>

     <form action="<?php echo base_url().'pelanggaran/update'; ?>" method="post"> 

     <div class="from-group">
     <label>Nama Santri</label>
     <input type="hidden" name="id" class="form-control" value="<?php echo $pg->id ?>">
     <select name="pelanggaran"class="form-control"  value="<?php echo $pg->pelanggaran ?>">
        <option> dff</option>
        <option>paii</option>
        </select>
     </div>

     <div class="from-group">
     <label>Pelanggaran</label>
     <select name="pelanggaran"class="form-control"  value="<?php echo $pg->pelanggaran ?>">
        <option> dff</option>
        <option>paii</option>
        </select>
     <!-- <input type="text" name="pelanggaran" class="form-control" value="<?php echo $pg->pelanggaran ?>"> -->
     </div>

     <div class="from-group">
     <label>Tanggal</label>
     <input type="date" name="tanggal" class="form-control" value="<?php echo $pg->tanggal ?>">
     </div>

    
     <button type="reset" class="btn btn-danger btn-sm">Reset</button>
     <button type="submit" class="btn btn-success btn-sm">Submit</button>
    
 <button  align="right" class="btn btn-danger btn-sm" href=" <?php echo base_url('pelanggaran/index') ?>">  Cancel</button>
     </form>
         <?php }?>
 </section>
</div>