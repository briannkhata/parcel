<?php include '/../header.php'; ?>

<div class="portlet-body">
    <form role="form" action="<?= base_url(); ?>Report/refresh_parcels" method="post">
  
        <div class="col-md-12">
            <div class="form-group">
                <label for="exampleInputEmail1">Status</label>
                <select name="status_id" class="form-control" required="">
                    <option selected disabled>Status</option>
                    <?php foreach ($this->M_status->get_statuses() as $row) { ?>
                        <option value="<?= $row['status_id']; ?>">
                            <?= $row['status_name']; ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>

        <div class="modal-footer" style="border: none;">
            <button type="submit" class="btn blue"> Refresh Parcels</button>
        </div>
    </form>

</div>

<?php include '/../footer.php'; ?>