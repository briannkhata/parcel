<?php include'/../header.php';?>
<!-- BEGIN SIDEBAR -->

<div class="portlet-body">

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th style="width:3%;">#</th>
                <th>Name</th>
                <th>Username</th>
                <th>Contacts</th>
                <th>District</th>
                <th>City</th>
                <th>Location</th>
                <th>Address</th>
                <th>Role</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
				$count = 1;  
				foreach($users as $row):?>
            <tr>
                <td><?=$count++;?></td>
                <td><?=$row['name'];?> - <?=$row['gender']?></td>
                <td><?=$row['username'];?></td>
                <td><?=$row['phone'];?> | <?=$row['email'];?></td>
                <td><?=$row['district'];?></td>
                <td><?=$row['city'];?></td>
                <td><?=$row['location'];?></td>
                <td><?=$row['address'];?></td>
                <td><?=ucfirst($row['role']);?></td>
                <td>
                    <a href="<?=base_url();?>User/read/<?=$row['userid'];?>"
                        class="btn btn-primary btn-sm black"><i class="fa fa-edit"></i> Edit</a>
                    <a href="<?=base_url();?>User/delete/<?=$row['userid'];?>" class="btn btn-danger btn-sm black"><i class="fa fa-times-circle"></i> Delete</a>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>

</div>
<?php include'/../footer.php';?>