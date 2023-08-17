<?php include'/../header.php';?>

<div class="portlet-body">
    <form role="form" action="<?=base_url();?>Status/save" method="post">


        <div class="col-md-8">
            <div class="form-group">
                <label for="exampleInputEmail1">Status Name</label>
                <input type="text" class="form-control" name="status_name" value="<?php if (!empty($status_name)){echo $status_name;}?>"
                    required>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="exampleInputEmail1">Send SMS</label>
                <select name="sms" class="form-control" required="">
                    <option selected disabled>SMS</option>
                    <option <?php if($sms == '1') echo 'selected';?> value="1">Yes</option>
                    <option <?php if($sms == '0') echo 'selected';?> value="0">No</option>
                </select>
            </div>
        </div>

        <div class="modal-footer" style="border: none;">
            <?php if (isset($update_id)){?>
            <input type="hidden" name="update_id" id="update_id" value="<?=$update_id;?>">
            <?php }?>
            <button type="submit" class="btn blue"> Save</button>
        </div>
    </form>

</div>

<?php include'/../footer.php';?>