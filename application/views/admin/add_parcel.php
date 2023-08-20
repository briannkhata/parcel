<?php include '/../header.php'; ?>

<div class="portlet-body">
    <form role="form" action="<?= base_url(); ?>Parcel/save1" method="post">
        <strong>Sender Details</strong>
        <hr>
        <?php include 'sender_form.php'; ?>
        <hr>

        <strong>Receiver Details</strong>
        <hr>
        <?php include 'receiver_form.php'; ?>
        <hr>

        <strong>Parcel Details</strong>
        <hr>
        <?php include 'parcel_form.php'; ?>
        <hr>

        <div class="modal-footer" style="border: none;">
            <?php if (isset($update_id)) { ?>
                <input type="hidden" name="update_id" id="update_id" value="<?= $update_id; ?>">
            <?php } ?>
            <button type="submit" class="btn blue"> Save</button>
        </div>
</div>
</form>
</div>

<?php include '/../footer.php'; ?>