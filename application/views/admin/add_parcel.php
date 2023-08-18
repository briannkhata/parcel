<?php include'/../header.php';?>

<div class="portlet-body">
    <form role="form" action="<?=base_url();?>Parcel/save" method="post">


        <?php include'form.php';?>
        <hr>
        <br>




        <div class="modal-footer" style="border: none;">
             <button type="submit" class="btn blue"> Next</button>
        </div>
    </form>

</div>

<?php include'/../footer.php';?>