<?php include '/../header.php'; ?>

<div class="portlet-body">
    <form role="form" action="<?= base_url(); ?>Parcel/save2" method="post">

        <?php include 'form.php'; ?>
        <input type="hidden" class="form-control" name="role" value="receiver">

        <div class="modal-footer" style="border: none;">
            <button type="submit" class="btn blue"> Next</button>
        </div>
    </form>

</div>

<?php include '/../footer.php'; ?>