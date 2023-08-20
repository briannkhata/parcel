<?php $this->load->view('header.php');?>
<div class="portlet-body">
    <a href="<?= base_url();
    ; ?>User/read" class="btn btn-primary btn-sm black"><i class="fa fa-plus"></i> Add New</a>
    <hr>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th style="width:3%;">#</th>
                <th>Name</th>
                <th>Username</th>
                <th>Contacts</th>
                <th>Branch</th>
                <th>Address</th>
                <th>Role</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $count = 1;
            foreach ($users as $row): ?>
                <tr>
                    <td>
                        <?= $count++; ?>
                    </td>
                    <td>
                        <?= $row['name']; ?> <br>
                        <?= ucfirst($row['gender']) ?>
                    </td>
                    <td>
                        <?= $row['username']; ?>
                    </td>
                    <td>
                        <?= $row['phone']; ?> <br>
                        <?= $row['email']; ?>
                    </td>
                    <td> <?= $this->M_branch->get_branch($row['branch_id']); ?>
                    </td>
                  
                    <td>
                        <?= $row['address']; ?>
                    </td>
                    <td>
                        <?= ucfirst($row['role']); ?>
                    </td>
                    <td>
                        <a href="<?= base_url(); ?>User/read/<?= $row['user_id']; ?>" class="btn btn-primary btn-sm"><i
                                class="fa fa-edit"></i></a>
                        <a href="<?= base_url(); ?>User/delete/<?= $row['user_id']; ?>" class="btn btn-danger btn-sm"><i
                                class="fa fa-times-circle"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php $this->load->view('footer.php');?>
