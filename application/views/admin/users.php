<?php include'/../header.php';?>
<!-- BEGIN SIDEBAR -->

<div class="portlet-body">

    <div class="portlet-body">

        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th style="width:3%;">#</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Username</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>District</th>
                    <th>City</th>
                    <th>Location</th>
                    <th>Role</th>
					<th></th>
                </tr>
            </thead>
            <tbody>
                <?php
				$count = 1;  
				foreach($users as $row):?>
                <tr class="odd gradeX">
                    <td><?=$count++;?></td>
                    <td><?=$row['name'];?></td>
                    <td><?=$row['gender']?></td>
                    <td><?=$row['username'];?></td>
                    <td><?=$row['phone'];?></td>
                    <td><?=$row['email'];?></td>
                    <td><?=$row['district'];?></td>
                    <td><?=$row['city'];?></td>
                    <td><?=$row['location'];?></td>
                    <td><?=$row['role'];?></td>
                    <td>
                    </td>
                </tr>
                <?php endforeach;?>

                </tr>
            </tbody>
        </table>

    </div>
</div>

<?php include'/../footer.php';?>
