<?php $this->load->view('header.php');?>

<div class="portlet-body">
    <form role="form" action="<?= base_url(); ?>Parcel/save_event" method="post">
    <div class="col-md-12 ">
            <div class="form-group">
                <label for="exampleInputEmail1">Current Status</label>
                <input class="form-control" name="text" readonly value="<?=$this->M_status->get_status($this->M_parcel->get_status_id($parcel_id));?>">
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="exampleInputEmail1">Change To</label>
                <select name="status_id" class="form-control" required="">
                    <option selected disabled>Status</option>
                    <?php foreach ($this->M_status->get_statuses() as $row) { ?>
                        <option value="<?= $row['status_id']; ?>">
                            <?= $row['status_name']; ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>

        <div class="col-md-6 ">
            <div class="form-group">
                <label for="exampleInputEmail1">Location</label>
                <textarea class="form-control" name="location"><?php if (!empty($location)) {
                    echo $location;
                } ?></textarea>
            </div>
        </div>

        <div class="col-md-6 ">
            <div class="form-group">
                <label for="exampleInputEmail1">Description</label>
                <textarea class="form-control" name="desc"><?php if (!empty($desc)) {
                    echo $desc;
                } ?></textarea>
            </div>
        </div>

        <div class="modal-footer" style="border: none;">
            <input type="hidden" class="form-control" name="parcel_id" value="<?= $parcel_id; ?>">
            <button type="submit" class="btn blue"> Update</button>
        </div>
    </form>

</div>

<?php $this->load->view('footer.php');?>
