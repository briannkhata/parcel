<?php include '/../header.php'; ?>

<div class="portlet-body">
    <form role="form" action="<?= base_url(); ?>Parcel/save_payment" method="post">
        <div class="col-md-12">
            <div class="form-group">
                <label for="exampleInputEmail1">Charge</label>
                <input type="text" class="form-control" value="<?=number_format($this->M_parcel->get_charge($parcel_id),2);?>" readonly>
                <input type="hidden" name="charge" value="<?=$this->M_parcel->get_charge($parcel_id);?>">
                <input type="hidden" class="form-control" name="parcel_id" value="<?= $parcel_id; ?>">
            </div>
        </div>

        <div class="modal-footer" style="border: none;">
            <button type="submit" class="btn blue"> Pay</button>
        </div>
    </form>

</div>

<?php include '/../footer.php'; ?>