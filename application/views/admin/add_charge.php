<?php include'/../header.php';?>

<div class="portlet-body">
    <form role="form" action="<?=base_url();?>Charge/save" method="post">


        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputEmail1">Weight From</label>
                <input type="text" class="form-control" name="weight_from" value="<?php if (!empty($weight_from)){echo $weight_from;}?>"
                    required>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputEmail1">Weight To</label>
                <input type="text" class="form-control" name="weight_to" value="<?php if (!empty($weight_to)){echo $weight_to;}?>"
                    required>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="exampleInputEmail1">Charge</label>
                <input type="text" class="form-control" name="charge" value="<?php if (!empty($charge)){echo $charge;}?>"
                    required>
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