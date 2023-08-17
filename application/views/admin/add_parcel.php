<?php include'/../header.php';?>

<div class="portlet-body">
    <form role="form" action="<?=base_url();?>User/save" method="post">


        <div class="col-md-12">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" name="name" value="<?php if (!empty($name)){echo $name;}?>"
                    required>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="exampleInputEmail1">Gender</label>
                <select name="gender" class="form-control" required="">
                    <option selected disabled>Gender</option>
                    <option <?php if($gender == 'male') echo 'selected';?> value="male">Male</option>
                    <option <?php if($gender == 'female') echo 'selected';?> value="female">Female</option>
                </select>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="text" class="form-control" name="username"
                    value="<?php if (!empty($username)){echo $username;}?>" required>
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="exampleInputEmail1">Password</label>
                <input type="text" class="form-control" name="password" value="">
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="exampleInputEmail1">Phone</label>
                <input type="tel" class="form-control" name="phone" value="<?php if (!empty($phone)){echo $phone;}?>"
                    required>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" name="email" value="<?php if (!empty($email)){echo $email;}?>"
                    required>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="exampleInputEmail1">Role</label>
                <select name="role" class="form-control" required="">
                    <option selected disabled>Role</option>
                    <option <?php if($role == 'admin') echo 'selected';?> value="admin">Admin</option>
                    <option <?php if($role == 'user') echo 'selected';?> value="user">Norma User</option>
                </select>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="exampleInputEmail1">Address</label>
                <textarea class="form-control" name="address"><?php if (!empty($address)){echo $address;}?></textarea>
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