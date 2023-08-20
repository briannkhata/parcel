<?php include '/../header.php'; ?>

<div class="portlet-body">
    <form role="form" action="<?= base_url(); ?>branch/save" method="post">


        <div class="col-md-12">
            <div class="form-group">
                <label for="exampleInputEmail1">branch</label>
                <input type="text" class="form-control" name="branch"
                    value="<?php if (!empty($branch)) {
                        echo $branch;
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