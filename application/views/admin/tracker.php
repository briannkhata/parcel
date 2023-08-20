<?php $this->load->view('header.php');?>

<div class="portlet-body">
    <form role="form" action="<?= base_url(); ?>Parcel/track" method="post">
        <div class="col-md-12">
            <div class="form-group">
                <label for="exampleInputEmail1">Enter Tracking Code</label>
                <input type="text" class="form-control" name="tracking_code" required>
            </div>
        </div>

        <div class="modal-footer" style="border: none;">
            <button type="submit" class="btn blue"> Track</button>
        </div>
    </form>

</div>

<?php $this->load->view('footer.php');?>
