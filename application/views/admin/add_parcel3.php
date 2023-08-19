<?php include'/../header.php';?>

<div class="portlet-body">
    <form role="form" action="<?=base_url();?>Parcel/save3" method="post">

        <?php include'form.php';?>
        <input type="text" class="form-control" value="<?=$this->M_user->get_name($this->session->userdata('sender_id'));?>">
        <input type="text" class="form-control" value="<?=$this->M_user->get_name($this->session->userdata('receiver_id'));?>">

        <div class="modal-footer" style="border: none;">
             <button type="submit" class="btn blue"> Next</button>
        </div>
    </form>

</div>

<?php include'/../footer.php';?>