<?php $this->load->view('header.php');?>
<div class="portlet-body">
<a href="<?=base_url();;?>Status/read" class="btn btn-primary btn-sm black"><i class="fa fa-plus"></i> Add New</a>
<hr>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th style="width:3%;">#</th>
                <th>Status</th>
                <th>Send SMS</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
				$count = 1;  
				foreach($statuses as $row):?>
            <tr>
                <td><?=$count++;?></td>
                <td><?=$row['status_name'];?></td>
                <td><?=$row['sms'] == 1 ? "Yes":"No";?></td>
                <td>
                    <a href="<?=base_url();?>Status/read/<?=$row['status_id'];?>" class="btn btn-primary btn-sm black"><i
                            class="fa fa-edit"></i></a>
                    <a href="<?=base_url();?>Status/delete/<?=$row['status_id'];?>" class="btn btn-danger btn-sm black"><i
                            class="fa fa-times-circle"></i></a>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>

</div>
<?php $this->load->view('footer.php');?>
