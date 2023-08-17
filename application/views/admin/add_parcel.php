<?php include'/../header.php';?>

<div class="portlet-body">
    <form role="form" action="<?=base_url();?>Parcel/save" method="post">

        <div class="col-md-12">
            <div class="form-group">
                <label for="exampleInputEmail1">Sender</label>
                <select name="sender_id" class="form-control" required="">
                    <option selected disabled>Sender</option>
                    <?php foreach($this->M_user->get_senders() as $row){?>
                    <option <?php if($sender_id == $row['user_id']) echo 'selected';?>
                        value="<?=$row['user_id'];?>">
                        <?=$row['name'];?> |  <?=$row['phone'];?> |  <?=$row['email'];?></option>
                    <?php }?>
                </select>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="exampleInputEmail1">Receiver</label>
                <select name="receiver_id" class="form-control" required="">
                    <option selected disabled>Receiver</option>
                    <?php foreach($this->M_user->get_receivers() as $row){?>
                    <option <?php if($receiver_id == $row['user_id']) echo 'selected';?>
                        value="<?=$row['user_id'];?>">
                        <?=$row['name'];?> |  <?=$row['phone'];?> |  <?=$row['email'];?></option>
                    <?php }?>
                </select>
            </div>
        </div>



        <div class="col-md-4">
            <div class="form-group">
                <label for="exampleInputEmail1">Estimated Arrival Date</label>
                <input type="date" class="form-control" name="edd" value="<?php if (!empty($edd)){echo $edd;}?>"
                    required>
            </div>
        </div>


        <div class="col-md-4">
            <div class="form-group">
                <label for="exampleInputEmail1">Weight</label>
                <input type="text" class="form-control" name="weight"
                    value="<?php if (!empty($weight)){echo $weight;}?>" required>
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="exampleInputEmail1">Status</label>
                <select name="status_id" class="form-control" required="">
                    <option selected disabled>Status</option>
                    <?php foreach($this->M_status->get_statuses() as $row){?>
                    <option <?php if($status_id == $row['status_id']) echo 'selected';?>
                        value="<?=$row['status_id'];?>">
                        <?=$row['status_name'];?></option>
                    <?php }?>
                </select>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="exampleInputEmail1">Charge</label>
                <input type="text" class="form-control" name="charge"
                    value="<?php if (!empty($charge)){echo $charge;}?>" required>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="exampleInputEmail1">Parcel Description</label>
                <textarea class="form-control"
                    name="parcel_desc"><?php if (!empty($parcel_desc)){echo $parcel_desc;}?></textarea>
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