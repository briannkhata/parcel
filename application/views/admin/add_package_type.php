<?php include '/../header.php'; ?>

<div class="portlet-body">
    <form role="form" action="<?= base_url(); ?>Package_type/save" method="post">


        <div class="col-md-12">
            <div class="form-group">
                <label for="exampleInputEmail1">Package Type</label>
                <input type="text" class="form-control" name="package_type"
                    value="<?php if (!empty($package_type)) {
                        echo $package_type;
                    } ?>" required>
            </div>
        </div>

        <div class="modal-footer" style="border: none;">
            <?php if (isset($update_id)) { ?>
                <input type="hidden" name="update_id" id="update_id" value="<?= $update_id; ?>">
            <?php } ?>
            <button type="submit" class="btn blue"> Save</button>
        </div>
    </form>

</div>

<?php include '/../footer.php'; ?>