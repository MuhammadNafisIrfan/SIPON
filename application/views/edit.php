 <div class="content-wrapper">
    <section class="content">
        <?php foreach($tunggakan as $tgk) { ?>

        <form action="<?php echo base_url().'tunggakan/update'; ?>" method="post"> 

        <div class="from-group">
        <label>Nama Santri</label>
        <input type="hidden" name="id" class="form-control" value="<?php echo $tgk->id ?>">
        <input type="text" name="nama" class="form-control" value="<?php echo $tgk->nama ?>">
        </div>

        <div class="from-group">
        <label>Nominal</label>
        <input type="text" name="nominal" class="form-control" value="<?php echo $tgk->nominal ?>">
        </div>

        <div class="from-group">
        <label>Keterangan</label>
        <input type="text" name="keterangan" class="form-control" value="<?php echo $tgk->keterangan ?>">
        </div>

       
        <button type="reset" class="btn btn-danger">Reset</button>
        <button type="submit" class="btn btn-success">Submit</button>

        </form>
            <?php }?>
    </section>
</div>