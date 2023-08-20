<?php include '/../header.php'; ?>

<div class="portlet-body">
    <form role="form" action="<?= base_url(); ?>User/save_settings" method="post">

<?php foreach($settings as $row){?>
        <div class="col-md-12">
            <div class="form-group">
                <label for="exampleInputEmail1">Company Name</label>
                <input type="text" class="form-control" name="company" value="<?=$row['company'];?>"
                    required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputEmail1">Phone</label>
                <input type="tel" class="form-control" name="phone" value="<?=$row['phone'];?>"
                    required>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputEmail1">Alt Phone</label>
                <input type="tel" class="form-control" name="alt_phone" value="<?=$row['alt_phone'];?>">
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" name="email" value="<?=$row['email'];?>"
                    required>
            </div>
        </div>
       
    
        <div class="col-md-12">
            <div class="form-group">
                <label for="exampleInputEmail1">Address</label>
                <textarea class="form-control" name="address"><?=$row['address'];?></textarea>
            </div>
        </div>

        <div class="modal-footer" style="border: none;">
            <input type="hidden" name="id" id="id" value="<?= $row['id']; ?>">
            <button type="submit" class="btn blue"> Save</button>
        </div>
        <?php }?>
    </form>

</div>

<?php include '/../footer.php'; ?>